<?php
include("database/db.php");

function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    return $ip;
}

$user_ip = getUserIP();

date_default_timezone_set("Asia/Calcutta");
$today = date("Y-m-d");
$month = date("m");
$year = date("Y");
$time = date("Y-m-d h:i:s A");

// Check the last hit entry for the current day
$qry_check_today = "SELECT * FROM hit_counter WHERE `date` = '$today'";
$result = $conn->query($qry_check_today);

if ($result->num_rows > 0) {
    // Hit counter for today exists
    $row = $result->fetch_assoc();
    $last_hit_time = $row['last_hit'];

    // Check if the user IP already exists in the log for today
    $qry_check_ip = "SELECT * FROM hit_log WHERE `ip_address` = '$user_ip' AND `date` = '$today'";
    $ip_result = $conn->query($qry_check_ip);

    if ($ip_result->num_rows == 0) {
        // IP not found, increment hit counter and log the visit
        $qry_update_hit = "UPDATE hit_counter SET `count` = `count` + 1, `last_hit` = '$time' WHERE `date` = '$today'";
        $conn->query($qry_update_hit);

        // Insert new log for IP address
        $qry_insert_log = "INSERT INTO hit_log (`ip_address`, `time_of_visit`, `date`) VALUES ('$user_ip', '$time', '$today')";
        $conn->query($qry_insert_log);
   	$qry = "SELECT * FROM `event` WHERE `current_status` = 'ACTIVE' AND `hide` = '0'";
	$res = $conn->query($qry);

	if ($res->num_rows > 0) {
    	while ($row = $res->fetch_assoc()) {
        $event_id = $row['event_id'];
    	}

  	//$event_id= $result;
	} else {
    	//echo "No active events found.";
	}
	if(isset($event_id))
	{
	$qry_update_hit = "UPDATE `event` SET `event_view` = `event_view` + 1 WHERE `event_id` = '$event_id'";
        $conn->query($qry_update_hit);
	
	}
	 }
} else {
    // No hit counter entry for today, create a new entry
    $qry_insert_hit = "INSERT INTO hit_counter (`date`, `count`, `month`, `year`, `last_hit`) VALUES ('$today', '1', '$month', '$year', '$time')";
    $conn->query($qry_insert_hit);

    // Log the user's IP and time of visit
    $qry_insert_log = "INSERT INTO hit_log (`ip_address`, `time_of_visit`, `date`) VALUES ('$user_ip', '$time', '$today')";
    $conn->query($qry_insert_log);
	

	$qry = "SELECT * FROM `event` WHERE `current_status` = 'ACTIVE' AND `hide` = '0'";
        $res = $conn->query($qry);

        if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
        $event_id = $row['event_id'];
        }

        //$event_id= $result;
        } else {
        //echo "No active events found.";
        }
        if(isset($event_id))
        {
        $qry_update_hit = "UPDATE `event` SET `event_view` = `event_view` + 1 WHERE `event_id` = '$event_id'";
        $conn->query($qry_update_hit);

        }



}
?>
