<?php include("../session/session_check.php"); ?>
<!DOCTYPE html>
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
  
	
    <script src="js/abin.js"></script>
	<script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
	
</head>

<body>
    <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="main-section">
        <div class="main-sectionWrapdashboard">
            <?php include("leftmenu.inc"); ?>
            <div class="dashboard-content">
                <div class="dashboard-hdr">
                    <div class="menuToggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="dashboard-hdrLeft">
                        <h5>Send Mail</h5>
                    </div>
                    <div class="dashboard-hdrRight">
                        <ul>
                            <li title="Notifications">
                                <i class="fa fa-bell"></i>
                                <span class="count">1</span>
                            </li>
                            <li title="Change password">
                                <i class="fa fa-unlock-alt"></i>
                            </li>
                            <li>
                                <i class="fa fa-user"></i> <span>Admin</span>
                            </li>
                            <li title="Logout">
                                <i class="fa fa-power-off"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- dashboard content -->
                <div class="dashboard-dynamicContent">
                    <div class="add-candidateFormWrap">
                        <form action="sendmail_process.php" name="addevent" id="addCandidateForm" method="post">
                            <div class="na-login-formLabel">
                               
                            </div>
							<?php if(isset($_SESSION['emailsuccess'])){echo "<font color='green'><div>Mail Sent &#10003;</div></font>"; } unset($_SESSION['emailsuccess']); ?>
							<font color="green"><div id="messagesuccess"></div></font>
							<font color="red"><div id="messagefailure"></div></font>
							</br>
                            <div class="na-login-formLabel">
                                <label for="name">Event Name</label>
                               <textarea cols="80" id="to" name="to" rows="2"  placeholder="To" disabled ></textarea>
								<textarea cols="80" id="bcc" name="bcc" rows="2"  placeholder="Bcc" ></textarea>
								<input type="text" name="subject" id="subject" placeholder="Subject" maxlength="">
                            </div>
									
							
							
                            <div class="na-login-formLabel">
                                <!--<form name="wc-richTextEditor" id="wc-richTextEditor-form" class="wc-richTextEditor" action="" method="post">
									-->
						
                                  <!-- Editor Control Box -->
                                    
									<textarea cols="80" id="editor1" name="editor1" rows="10" ></textarea>
									

									<script>
										CKEDITOR.replace( 'editor1', {
											height: 260,
											
										} );
									</script>

                                   
									<button type="submit" id="submit" class="btn-submit">send mail</button>
                               <!-- </form>-->
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>