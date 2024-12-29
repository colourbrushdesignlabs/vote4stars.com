 <?php 
include("../session/session_check.php");
include("../database/db.php");
$rand=mt_rand(100, 999);
$candidate_id="candi_".time()."_".$rand;
$candidate_name=$_POST['name'];
$candidate_photo=$candidate_id.".jpg";
$sector=$_POST['sector'];
$description=$_POST['editor1'];
$event_table=$_SESSION['event_id'];
date_default_timezone_set("Asia/Calcutta"); 
$creation_date= date("d-m-Y h:i:s A");
$admin=$_SESSION['adminname'];


if(!($_FILES["image"]["type"] == "image/png") 
|| !($_FILES["image"]["type"] == "image/jpg") 
|| !($_FILES["image"]["type"] == "image/jpeg"))
{
$_SESSION['success_add_candi']=3;
	echo "<script>location='add-candidate.php'</script>";
} 

$file1=$_FILES['image']['name'];
$photo="";
if($_FILES['image']['error']==0)
{
$ext= strtolower(substr(strrchr($file1,"."),1));

$elen=strlen($ext);
$flen=strlen($file1);
$slen=$flen-$elen-1;
//$sname=substr($file1,0,$slen);
$sname=$candidate_id;	
$photo=$sname.".".$ext;
move_uploaded_file($_FILES["image"]["tmp_name"],"images/candidate/".$photo);
}






$qry="INSERT INTO `$event_table` (`candidate`, `candidate_id`, `sector`, `description`, `file_path`, `creation_date`, `created_by`, `vote_count`) VALUES ('$candidate_name', '$candidate_id', '$sector', '$description', '$photo', '$creation_date', '$admin', '0');";

if($conn->query($qry))
{
	$_SESSION['success_add_candi']=1;
	echo "<script>location='add-candidate.php'</script>";
}
else
{
	$_SESSION['success_add_candi']=2;
	echo "<script>location='add-candidate.php'</script>";
	
}



?>