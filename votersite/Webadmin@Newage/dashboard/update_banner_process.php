<?php

include("../database/db.php"); 
include("../session/session.php");
date_default_timezone_set("Asia/Calcutta"); 
$modified_time= date("d-m-Y h:i:s A");


$qry1="select * from `file_manager` where `id`='1'";
$result=$conn->query($qry1);
							
							
							 if ($result->num_rows>0) 
	
								{
    
								while($row = $result->fetch_assoc()) 
								{
									$old_file=$row['file_name'];
								}
							 }

$old_photo="images/banner/".$old_file;
if($_FILES['image']['error']==0)
{

	if(!($_FILES["image"]["type"] == "image/png") 
|| !($_FILES["image"]["type"] == "image/jpg") 
|| !($_FILES["image"]["type"] == "image/jpeg"))
{
	echo "<script>location='update_banner.php'</script>";
} 
	

	unlink($old_photo);
	
$file1=$_FILES['image']['name'];
$photo="";
//if($_FILES['image']['error']==0)
//{
$ext= strtolower(substr(strrchr($file1,"."),1));

$elen=strlen($ext);
$flen=strlen($file1);
$slen=$flen-$elen-1;
//$sname=substr($file1,0,$slen);
$sname=time();
$photo=$sname.".".$ext;
exec ("find /var/www/html/Webadmin@Newage/dashboard/images/banner -type d -exec chmod 0757 {} +");
move_uploaded_file($_FILES["image"]["tmp_name"],"images/banner/".$photo);
//}
exec ("find /var/www/html/Webadmin@Newage/dashboard/images/banner -type d -exec chmod 0755 {} +");


$qry="UPDATE `file_manager` SET `file_name` = '$photo',`last_modified` = '$modified_time' WHERE `file_manager`.`id` = 1;";

if($conn->query($qry))	
{
	$_SESSION['success_add_banner']=1;
	echo "<script>location='update_banner.php'</script>";

}
else
{
	$_SESSION['success_add_banner']=2;
	echo "<script>location='update_banner.php'</script>";
	
}

}
	


?>
