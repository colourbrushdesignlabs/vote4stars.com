<?php
include "../database/db.php";
$result = 'false';
$id=intval($_POST['id']);
$password=$_POST['password'];

if($password=="")
{
	$result='invalid';
}
else
{
$res = $conn->query("SELECT * FROM admin_login WHERE id='$id' AND password='$password'");

if ($res->num_rows==1) 
	
{
    
while($row = $res->fetch_assoc()) 
{
$result='true';
}
}
}
echo $result;
?>