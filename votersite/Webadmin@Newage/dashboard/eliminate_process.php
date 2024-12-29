<?php
include("../session/session_check.php"); 
include("../database/db.php"); 

// Sanitize and validate user input
$count = isset($_POST['count']) ? intval($_POST['count']) : 0;

// Prepare the first query to prevent SQL injection
$qry4 = $conn->prepare("SELECT event_id FROM event WHERE current_status = ?");
$current_status = 'ACTIVE';
$qry4->bind_param("s", $current_status);
$qry4->execute();
$result4 = $qry4->get_result();

if ($result4->num_rows === 1) {
    $row4 = $result4->fetch_assoc();
    $ev_id = $row4['event_id'];
} else {
    // Handle case where no or more than one row is returned
    die('No active event found');
}


// Use the fetched event_id safely
$event_id = $table_name = $conn->real_escape_string($ev_id);
$i = 0;
$to = $count;

$stmt = $conn->prepare("UPDATE `staging` SET current_stage = current_stage + 1 WHERE event_id = ?");
$stmt->bind_param("s", $event_id);
$stmt->execute();
$stmt->close();
// Prepare and execute second query
$qry2 = $conn->prepare("SELECT id FROM `$table_name` ORDER BY vote_count ASC LIMIT ?");
$qry2->bind_param("i", $to);
$qry2->execute();
$result2 = $qry2->get_result();

$row_id = [];
if ($result2->num_rows > 0) {
    while ($row2 = $result2->fetch_assoc()) {
        $row_id[$i] = $row2['id'];
        $i++;
    }
}

// Update the eliminated status for the selected rows using a prepared statement
$qry11 = $conn->prepare("UPDATE `$table_name` SET eliminated = 1 WHERE id = ?");
for ($j = 0; $j < $i; $j++) {
    $qry11->bind_param("i", $row_id[$j]);
    $qry11->execute();
}

// Redirect to home page
echo "<script>location='eliminate.php'</script>";

?>
