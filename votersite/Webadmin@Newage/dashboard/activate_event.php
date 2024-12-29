
<?php 
include("../session/session_check.php"); 
include("../database/db.php");
$_SESSION['activationsuccess']=(isset($_SESSION['activationsuccess'])) ? (int)$_SESSION['activationsuccess'] : 0;
$id=base64_decode($_GET['id']);
$username=$_SESSION['user'];
$newid=intval($id);
$qry="select * from `event` where `id`='$id'"; 
								
							
							//$qry="select * from suggest_icon ORDER BY 'time' ASC LIMIT $from, $to "; 
							$result=$conn->query($qry);
							
							
							 if ($result->num_rows==1) 
	
								{
    
								while($row = $result->fetch_assoc()) 
								{
								$event_name=$row['event_name'];
								$description=$row['description'];	
									
								}
							 }

$qry1="select id,password from `admin_login` where `username`='$username'"; 

$result1=$conn->query($qry1);
							
							
							 if ($result1->num_rows==1) 
	
								{
    
								while($row1 = $result1->fetch_assoc()) 
								{
								$password=$row1['password'];
								$password_id=$row1['id'];
								
									
								}
							 }


									

?>
<?php 
//								
//								if(isset($_SESSION['wrongpassword']))
//								
//								{
//								echo "wrong password";
//									
//								unset($_SESSION['wrongpassword']);
//								}
//								
//								?>
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
	<link rel="stylesheet" href="css/abin.css">
    <link rel="stylesheet" href="fonts/font-awesome/font-awesome.min.css">

    <link rel="stylesheet" href="css/styles.css">
    <!-- scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/toastr.js"></script>
    <script src="js/home.js"></script>
  
	
    <script src="js/abin.js"></script>
	<script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
	
</head>

<body onload="checktoast_act(<?php echo $_SESSION['activationsuccess']; ?>);">
	<?php unset($_SESSION['activationsuccess']); ?>
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
                        <h5>MANAGE EVENTS-->ACTIVATE </h5>
                    </div>
                    <?php include("hdr_right.php"); ?>
                </div>
                <!-- dashboard content -->
                <div class="dashboard-dynamicContent">
                    <div class="add-candidateFormWrap">
                        <form action="activate_event_process.php" name="addevent" id="addCandidateForm" method="post">
                            <div class="na-login-formLabel">
                               
                            </div>
							
                            <div class="na-login-formLabel">
                                <label for="name">Event Name</label>
                                <input type="text" name="eventname" id="eventname" value="<?php echo $event_name; ?>" placeholder="Event Name" maxlength="" disabled>
								<input type="hidden" name="id" id="id" value="<?php echo $newid; ?>" maxlength="" >
								<input type="hidden" name="passwordid" id="passwordid" value="<?php echo $password_id; ?>" maxlength="" >
								<input type="hidden" name="dbpassword" id="dbpassword" value="<?php echo base64_encode($password); ?>" maxlength="" >
                            </div>
									
							
							
                            <div class="na-login-formLabel">
                                <!--<form name="wc-richTextEditor" id="wc-richTextEditor-form" class="wc-richTextEditor" action="" method="post">
									-->
						
                                  <!-- Editor Control Box -->
                                    
									<textarea cols="80" id="editor1" name="editor1" rows="8" disabled > <?php echo $description; ?></textarea>

									<script>
										CKEDITOR.replace( 'editor1', {
											height: 260,
											
										} );
									</script>
								<font color="#E0060A"><P id="warning">WARNING: Please Note that if you activate this event,then onwards this event will be the active event and all other events will be inactive and also all the data at front-end will be changed by this event, if once activated old events can't activate again, so do this very carefully.. </p></font></br>
								<font color="#00B303"><div id="messagesuccess"></div></font>
								<font color="#E0060A"><div id="messagefailure"></div></font>
								<input type="password" name="password" id="password" placeholder="Enter Password of <?php echo $_SESSION['adminname'];?>" >
									
                               <div>    
									<button type="submit" id="submit" class="btn-submit">Activate</button>
								<button type="button" id="submit" class="btn-cancel" onClick="goto_viewevent();">&lt;- Back</button>
								</div>
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