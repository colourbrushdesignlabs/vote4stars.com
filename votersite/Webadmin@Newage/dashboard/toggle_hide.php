<?php 
include("../session/session_check.php"); 
include("../database/db.php"); 
$id= base64_decode($_GET['id']);
$currentpage="view_event.php";
$page=base64_decode($_GET['pg']);
 $hide=base64_decode($_GET['ns']);

$qry="UPDATE `event` SET `hide` = '$hide' WHERE `event`.`id` = '$id';";
if ($conn->query($qry))
{
	
		echo "<script>location='".$currentpage."?page=".$page."'</script>";
	
}

?>