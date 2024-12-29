<!DOCTYPE html>
<?php
include("session/session.php");
include("pg_security/security.php");

if(!isset($_POST['otp'])&&!isset($_SESSION['otpattempt']))	
{
	session_destroy();
	echo "<script>location='index.php'</script>";
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Newage</title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- stylesheets -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fonts/font-awesome/font-awesome.min.css">
    <!-- scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/home.js"></script>
	<script src="js/security.js"></script>
</head>

<body>
    <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="main-section">
        <!-- forgot password wrapper -->
       <div class="fgt-pwdMain">
        <div class="fgt-header">
            <img src="images/Logo.png" alt="logo" class="login-logo">
        </div>
           <div class="fgt-pwdWrap">
               <i class="fa fa-unlock"></i>
               <h2 class="pwd-title">Reset your password?</h2>
               <p>Enter your new password to access your account.</p>
                <form action="reset-password_process.php" name="resetPwd" id="resetpwdForm" method="post">
                    <div class="na-login-formLabel">
                        <label for="newpassword">New Password</label>
                        <input type="password" name="newpassword" id="newpassword" placeholder="New Password">
                    </div>
                    <div class="na-login-formLabel">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                         <span id='message'></span>
                    </div>
                        <button type="submit" class="btn-submit">Submit</button>
                </form>
           </div>
       </div>
    </div>
</body>

</html>