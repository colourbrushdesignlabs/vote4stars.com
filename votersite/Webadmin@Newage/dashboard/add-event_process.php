<?php
include("../session/session.php");
include("../database/db.php");

$event_name = htmlspecialchars(trim($_POST['eventname']));  // Sanitize input
$description = htmlspecialchars(trim($_POST['editor1']));  // Sanitize input
$three_digit = mt_rand(100, 999);
$event_id = "ev_" . time() . "_" . $three_digit;

date_default_timezone_set("Asia/Calcutta");
$creation_date = date("d-m-Y h:i:s A");
$created_by = $_SESSION['adminname'];  // Assuming adminname is sanitized at login
$current_status = "INACTIVE";

// Prepared statement for event insertion
$stmt = $conn->prepare("INSERT INTO `event` 
(`event_name`, `description`, `event_id`, `creation_date`, `created_by`, `current_status`) 
VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $event_name, $description, $event_id, $creation_date, $created_by, $current_status);

if ($stmt->execute()) {
    // Sanitize table name before use
    $event_id = preg_replace("/[^a-zA-Z0-9_]/", "", $event_id);

    // Prepared query for creating event-specific table
    $qry2 = "CREATE TABLE `$database`.`$event_id` (
        `id` INT(5) NOT NULL AUTO_INCREMENT,
        `candidate` TEXT NOT NULL,
        `candidate_id` TEXT NOT NULL,
        `sector` TEXT NOT NULL,
        `description` TEXT NOT NULL,
        `file_path` TEXT NOT NULL,
        `creation_date` TEXT NOT NULL,
        `created_by` TEXT NOT NULL,
        `vote_count` INT(10) NOT NULL,
        `current_stage` INT(2) NOT NULL DEFAULT 1,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB CHARSET=utf8mb4;";
    
    if ($conn->query($qry2)) {
        // Alter table to add eliminated field
        $qry_alter = "ALTER TABLE `$event_id` ADD `eliminated` INT(1) NOT NULL DEFAULT '0' AFTER `vote_count`;";
        $conn->query($qry_alter);

        // Prepared statement for staging table
        $stmt2 = $conn->prepare("INSERT INTO staging (event, event_id, current_stage) VALUES (?, ?, ?)");
        $stmt2->bind_param("ssi", $event, $eventid, $current_stage);

        $event = $event_name;
        $eventid = $event_id;
        $current_stage = 1;
        $stmt2->execute();

        // Sanitize table name before use
        $votehistorytable = "vote_history_" . preg_replace("/[^a-zA-Z0-9_]/", "", $event_id);

        // Prepared query for vote history table
        $qry3 = "CREATE TABLE `$database`.`$votehistorytable` (
            `id` INT(10) NOT NULL AUTO_INCREMENT,
	    `candidate_name` TEXT NOT NULL,
            `candidate` TEXT NOT NULL,
            `time` TEXT NOT NULL,
            `ipaddress` TEXT NOT NULL,
            `mac_id` TEXT NOT NULL,
            `month` TEXT NOT NULL,
            `year` TEXT NOT NULL,
            `date` TEXT NOT NULL,
            `event_start_date` TEXT DEFAULT NULL,
            `event_end_date` TEXT DEFAULT NULL,
            `vote_stage` INT(2) NOT NULL,
	    `iplocation` TEXT NOT NULL,
	    `ipregion` TEXT NOT NULL,
	    `ipcountry` TEXT NOT NULL,
	    `latitude` TEXT NOT NULL,
	    `longitude` TEXT NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE = InnoDB CHARSET=utf8mb4;";
        
        if ($conn->query($qry3)) {
            $_SESSION['event_added'] = "success";
            echo "<script>location='add-event.php'</script>";
        } else {
            // Log error and provide a generic message
            error_log("Error creating vote history table: " . $conn->error);
            echo "An error occurred while setting up the event. Please try again.";
        }
    } else {
        error_log("Error creating event table: " . $conn->error);
        echo "An error occurred while creating the event. Please try again.";
    }
} else {
    error_log("Error inserting event: " . $stmt->error);
    echo "An error occurred while saving the event. Please try again.";
}

$stmt->close();
$conn->close();
?>
