<?php
include("../database/db.php");
$intTotalPerPage = 10;
$intPage = isset($_GET['page']) && ctype_digit($_GET['page']) ? (int) $_GET['page'] : 0;

$strSqlQuery = "SELECT * FROM suggest_icon WHERE id != ? ORDER BY `id` ASC LIMIT ?, ?";
$strStatus = 'draft';
$intStart = ($intPage * $intTotalPerPage);
$intLimit = $intTotalPerPage;
//$objDbLink = mysqli_connect("...");
$objGetResults = mysqli_prepare($conn, $strSqlQuery);
mysqli_stmt_bind_param($objGetResults, 'sii',  $strStatus, $intStart, $intLimit);
//Execute query and fetch
//Display results

$objTotalRows = mysqli_query($conn,"SELECT COUNT(id) AS total FROM suggest_icon ");
$arrTotalRows = mysqli_fetch_assoc($objTotalRows);

$intTotalPages = ceil($arrTotalRows['total'] / $intTotalPerPage);

for ($i = 1; $i <= $intTotalPages; $i++) {
    echo "<a href='?page=" . $i . "'class='active'>" . $i . "</a>&nbsp;";
}

?>