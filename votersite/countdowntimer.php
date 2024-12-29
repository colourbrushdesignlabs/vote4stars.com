<?php

$qry="select `content` from `dynamic_contents` where `id`=1";
$result=$conn->query($qry);
							
							
							 if ($result->num_rows==1) 
	
								{
    
								while($row = $result->fetch_assoc()) 
								{
									$countdown=$row['content']; 
									
									
								}
							 }

$_SESSION['countdown']=$countdown;
?>

