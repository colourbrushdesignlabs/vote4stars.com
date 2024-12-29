<?php

require_once("../session/session_check.php");

// insert your mysql connection code here

//include("../database/db.php");

$perPage = 10;

$startAt = $perPage * ($page - 1);

$table_name;

$query = "SELECT COUNT(*) as total FROM $table_name";

$r = $conn->query($query);

$row5 = $r->fetch_assoc() ;

$totalPages = ceil($row5['total'] / $perPage);




$links = "";

for ($i = 1; $i <= $totalPages; ++$i)
{

  $links .= ($i == $page ) 

            ? "<a href='view-candidate.php?page=$i'class='active'> $i</a>"

            

	       :"<a href='view-candidate.php?page=$i'> $i</a>";

       

}



//$r = mysqli_query($conn,$query);











// display results here the way you want


echo $links; // show links to other pages