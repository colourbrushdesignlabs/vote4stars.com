<?php


include "../database/db.php";


$result = 'true';


$table_name=$_POST['table_name'];
$id=intval($_POST['row_id']);
$new_count=$_POST['count'];


$qry="UPDATE `$table_name` SET `vote_count`='$new_count' WHERE `$table_name`.`id`='$id'";


 
if ($conn->query($qry))
{
	
		echo "<script>location='view-candidate.php'</script>";
	
}
else
{
	$result="failed";
}


	
echo $result;


?>