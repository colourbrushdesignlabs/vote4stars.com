<?php
require_once("../session/session_check.php");
// insert your mysql connection code here
include("../database/db.php");
$perPage = 10;

$startAt = $perPage * ($page - 1);

$query = "SELECT COUNT(*) as total FROM suggest_icon where `starred`='1'";
$r = $conn->query($query);
$row = $r->fetch_assoc() ;
$totalPages = ceil($row['total'] / $perPage);

$links = "";
for ($i = 1; $i <= $totalPages; ++$i) {
  $links .= ($i == $page ) 
            ? "<a href='suggestion_sortby.php?action=$action&page=$i'class='active'> $i</a>"
            
	       :"<a href='suggestion_sortby.php?action=$action&page=$i'> $i</a>";
       
}

//$r = mysqli_query($conn,$query);





// display results here the way you want

echo $links; // show links to other pages