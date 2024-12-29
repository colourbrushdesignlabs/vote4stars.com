<?php
include("../session/session_check.php");
include("../database/db.php");

if(isset($_POST['eventid']))
{
	$event_id=$_SESSION['eventid']=$_POST['eventid'];
	
	$qry="select event_name from event where event_id='$event_id'";
	$res = $conn->query($qry);
	if ($res->num_rows==1) 
	
{
    
while($row = $res->fetch_assoc()) 
{
$result=$row['event_name'];
}
}
	$_SESSION['eventname']=$result;
	
	$_SESSION['event_id']=$_POST['eventid'];
	

}

echo $result;

?>