<?php





//$_SESSION['login']=0;

  session_unset();    

  

$_SESSION['login']=(isset($_SESSION['login'])) ? (int)$_SESSION['login'] : 0;

unset($_SESSION['event_id']);

echo "<script>location='../index.php'</script>";



?>