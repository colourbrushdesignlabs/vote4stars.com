
 

<!DOCTYPE html>

<?php

include("pg_security/security.php");
include("session/session.php");
$_SESSION['login']=0;
$resetsucess="success";
function nologin()
{
if(isset($_SESSION['nologin']))
{   
	
	echo '<h5 class='.'"'.'fa fa-thumbs-o-down'.'"'.'>'.'&nbsp;'.'Username or Password is wrong'.'</h5>';
	session_destroy();
}
	
}

function resetcheck()
{
if(isset($_SESSION['resetattempt']))
{   
	
	echo '<h5 class='.'"'.'fa fa-thumbs-o-up'.'"'.'>'.'&nbsp;'.'Password has been reset'.'</h5>';
	unset($_SESSION['resetattempt']);
}
	
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
    <link rel="stylesheet" href="css/toastr.css">
    <link rel="stylesheet" href="fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
     <script src="js/toastr.js"></script>
    <script src="js/home.js"></script>

	<script src="js/security.js"></script>
	
	
</head>

<body onLoad="">
	
    <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
	<div class="main-section">
        <!-- login wrapper -->
        <div class="main-sectionWrap">
            <!-- login form -->
            <div class="login-left">
                <div class="login-logo">
                    <img src="images/Logo.png" alt="logo">
                </div>
                <form action="loginprocess.php" name="login" id="loginForm" method="post">
                    <i class="fa fa-lock"></i>
					<font color="red" >
						<?php 
						
						nologin(); 
						
					
						$_SESSION['nomail']=0;
						?>
					</font>
					
					<font color="green" >
						<?php 
						
						resetcheck();
						?>
					</font>
					
					
                    <h4 class="login-title">Welcome back!</h4>
                    <div class="na-login-formLabel"> <label for="username">Username</label>
                        <input type="text" name="txtusername" id="txtusername" placeholder="Username">
                    </div>
                    <div class="na-login-formLabel">
                        <label for="password">Password</label>
                        <input type="password" name="txtpassword" id="txtpassword" placeholder="Password">
                    </div>
                    <div class="na-login-formLabel login-btnWrap">
                        <a href="forgot-password.php" class="fgt-pwd">Forgot password?</a>
                        <button type="submit" class="btn-submit">Login</button>
                    </div>
                </form>
                <div class="btm-ftr">
                    <p><a href="https://www.livenewage.com/" target="_blank"> <b>© NewAge Team</b> </a> | Powered by <a href="https://api.whatsapp.com/send?phone=919544123555" target="_blank"><b>ColourBrush</b></a></p>
                </div>
            </div>
            <!-- right image section -->
            <div class="login-right">
                <img src="images/login.jpeg" alt="login">
                <div class="login-content">
                    <h1>Welcome to our <b>Website</b></h1>
                    <p>Login to access your admin account</p>
                </div>
            </div>
        </div>
    </div>
	
	
	<?php
	//include("login.php");
	?>
	
</body>

</html>