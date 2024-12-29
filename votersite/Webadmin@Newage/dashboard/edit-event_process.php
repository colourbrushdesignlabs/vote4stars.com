<?php
include("../session/session.php");
include("../database/db.php");

// Validate inputs
$description = isset($_POST['editor1']) ? htmlspecialchars(trim($_POST['editor1']), ENT_QUOTES, 'UTF-8') : '';
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

date_default_timezone_set("Asia/Calcutta"); 
$modified_time = date("d-m-Y h:i:s A"); // Same format as requested
$modified_by = isset($_SESSION['adminname']) ? htmlspecialchars(trim($_SESSION['adminname']), ENT_QUOTES, 'UTF-8') : '';

// Use prepared statements to avoid SQL injection
$qry1 = $conn->prepare("UPDATE `event` SET `description` = ?, `modified` = 'yes', `modified_by` = ?, `modified_time` = ? WHERE `id` = ?");
$qry1->bind_param('sssi', $description, $modified_by, $modified_time, $id);

// Execute the query and handle the result
if ($qry1->execute()) {
    header("Location: view_event.php?action=success");
    exit;
} else {
    echo "Failure: " . $qry1->error; // Optional: Show detailed error (not recommended in production)
}

$qry1->close();
$conn->close();
?>



<?php
// include("../session/session.php");
// include("../database/db.php");
// //$event_name=$_POST['eventname'];
// $description=$_POST['editor1'];
// $id=$_POST['id'];


// date_default_timezone_set("Asia/Calcutta"); 
// $modified_time= date("d-m-Y h:i:s A");
// $modified_by=$_SESSION['adminname'];

// $qry1="UPDATE `event` SET `description` = '$description', `modified` = 'yes', `modified_by` = '$modified_by', `modified_time` = '$modified_time' WHERE `event`.`id` = '$id';";

// if($conn->query($qry1))
// {
// 	echo "<script>location='view_event.php?action=success'</script>";
// }
// else
// {
// 	echo "failure";
// }


?>
