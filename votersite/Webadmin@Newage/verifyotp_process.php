<?php

include("session/session.php");

if (!isset($_SESSION['otp']) && !isset($_POST['otp'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

$otpfromserver = $_SESSION['otp'];
$otpfromuser = $_POST['otp'];

if (strcmp($otpfromserver, $otpfromuser) == 0) {
    $_SESSION['otpattempt'] = "success";
    unset($_SESSION['otp']);
    header("Location: reset-password.php");
    exit;
} else {
    $_SESSION['trycount']++;

    if ($_SESSION['trycount'] == 3) {
        $_SESSION['trycount'] = 0;
        $_SESSION['attempt'] = "fail";
        header("Location: index.php");
        exit;
    } else {
        $_SESSION['attempt'] = "fail";
        header("Location: otpverify.php");
        exit;
    }
}

?>


<?php

// include("session/session.php");
// if(!isset($_SESSION['otp'])&&!isset($_POST['otp']))	
// {
// 	session_destroy();
// 	echo "<script>location='index.php'</script>";
// }

//  $otpfromserver=$_SESSION['otp'];
//  $otpfromuser=$_POST['otp'];



// if(strcmp($otpfromserver,$otpfromuser)==0)
// {
// 	$_SESSION['otpattempt']="success";
// 	unset($_SESSION['otp']);
// 	echo "<script>location='reset-password.php'</script>";
// }
// else
// {
	
	
// 	$_SESSION['trycount']++;
	
// 	if($_SESSION['trycount']==3)
// {
// 		$_SESSION['trycount']=0;
// 		$_SESSION['attempt']="fail";
// 	echo "<script>location='index.php'</script>";
	
// }
// 	else
// 	{
// 		$_SESSION['attempt']="fail";
// 		echo "<script>location='otpverify.php'</script>";
		
		
// 	}
	
// }

?>