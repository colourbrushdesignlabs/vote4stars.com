<?php 
include("../session/session_check.php"); 
include("../database/db.php"); 
$id= base64_decode($_GET['id']);
$currentpage=base64_decode($_GET['cp']);
$page=base64_decode($_GET['pg']);
 $new_star=base64_decode($_GET['ns']);
$action=base64_decode($_GET['action']);
$searchname=base64_decode($_GET['searchname']);
$qry="UPDATE `suggest_icon` SET `starred` = '$new_star' WHERE `suggest_icon`.`id` = '$id';";
if ($conn->query($qry))
{
	if($currentpage=="suggestion_sortby.php")
	{
		echo "<script>location='".$currentpage."?page=".$page."&action=".$action."'</script>";
	}
	else
	{
		echo "<script>location='".$currentpage."?page=".$page."&search_name=".$searchname."'</script>";
	}
}

?>