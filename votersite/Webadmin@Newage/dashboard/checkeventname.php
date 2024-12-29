<?php
include "../database/db.php";
$result = 'true';
$eventname=($_POST['eventname']);
if($eventname=="")
{
	$result='invalid';
}
else
{
$res = $conn->query("SELECT * FROM event WHERE event_name='$eventname'");

if ($res->num_rows>0) 
	
{
    
while($row = $res->fetch_assoc()) 
{
$result='false';
}
}
}
echo $result;
?>