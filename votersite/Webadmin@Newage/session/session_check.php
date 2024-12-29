<script src="../js/security.js"></script> 

<?php
include("../pg_security/security.php");
include("session.php");



$_SESSION['login']=(isset($_SESSION['login'])) ? (int)$_SESSION['login'] : 0;


if($_SESSION['login']==0)
{
	
	header("Location: ../index.php");
    exit(); // Ensure no further code is executed after the redirection

   
}


if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']> 3600)) {
    // last request was more than 30 minutes ago
	
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
	$_SESSION['login']=0;
	echo "<script>location='../index.php'</script>";
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

?>