<?php
include("session.php");


if( (!isset($_SESSION['login'])))
{
	
	echo "<script>location='../index.php'</script>";

    session_destroy();
}

?>