<?php
include("../session/session.php");
include("../database/db.php");

$id=$_POST['id'];
$dbuser=$_SESSION['user'];
$password_from_user = trim($_POST['password']);
$stmt = $conn->prepare("SELECT * FROM `admin_login` WHERE `username` = ?");
$stmt->bind_param("s", $dbuser);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$dbpwd = $row['password'];




//echo "dbpass= ".$dbpwd;

// Get the form inputs

if (password_verify($password_from_user, $dbpwd)) 
{
    unset($_SESSION['wrongpassword']);
    
    date_default_timezone_set("Asia/Calcutta");
    $modified_time = date("d-m-Y h:i:s A");
    $modified_by = $_SESSION['adminname'];
    
    // Prepared statement for selecting event by id
    $stmt = $conn->prepare("SELECT * FROM `event` WHERE `id` = ?");
    $stmt->bind_param("i", $id);  // "i" means integer
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $old = $row['old'];
        $current_status = $row['current_status'];
    }

    if ($old == 1) {
        $_SESSION['activationsuccess'] = 2;
        echo "<script>location='activate_event.php?id=" . base64_encode($id) . "'</script>";
    } else {
        // Prepared statement for updating expired events
        $stmt = $conn->prepare("UPDATE `event` SET `current_status`='EXPIRED', `end_date`=? WHERE `current_status`='ACTIVE'");
        $stmt->bind_param("s", $modified_time); // "s" means string
        if ($stmt->execute()) {
            $admin = $_SESSION['adminname'];

            // Prepared statement for activating the event
            $stmt = $conn->prepare("UPDATE `event` SET `current_status`='ACTIVE', `old`='1', `published_date`=?, `Published_by`=? WHERE `id`=?");
            $stmt->bind_param("ssi", $modified_time, $admin, $id);
            if ($stmt->execute()) {
                $_SESSION['activationsuccess'] = 1;
                echo "<script>location='activate_event.php?id=" . base64_encode($id) . "'</script>";
            } else {
                $_SESSION['activationsuccess'] = 2;
                echo "<script>location='activate_event.php?id=" . base64_encode($id) . "'</script>";
            }
        }
    }
}
else
{
    $_SESSION['wrongpassword'] = 1;
    $_SESSION['activationsuccess'] = 3;
    //echo "<script>location='activate_event.php?id=" . base64_encode($id) . "'</script>";
}


?>
