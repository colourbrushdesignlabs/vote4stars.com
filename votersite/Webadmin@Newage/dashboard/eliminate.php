<?php
include("../session/session_check.php"); 
include("../database/db.php"); 



?>

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
    <link rel="stylesheet" href="css/text-editor.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/toastr.js"></script>
    <script src="js/home.js"></script>
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
                        <h5>Eliminate by Count</h5>
                    </div>
                     <?php include("hdr_right.php"); ?>
                </div>
                <!-- dashboard content -->
                <div class="dashboard-dynamicContent">
                    <!--  <div class="changePasswordsec">
                        <h5>Change your password</h5>
                        <form action="" name="changePwd" id="ghh">
                            <div class="na-login-formLabel">
                                <label for="newpassword">New Password</label>
                                <input type="password" name="newpassword" id="newpassword" placeholder="New Password">
                            </div>
                            <div class="na-login-formLabel">
                                <label for="confirmpassword">Confirm Password</label>
                                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                                <span id='message'></span>
                            </div>
                            <button type="button" class="btn-submit">Submit</button>
                        </form>
                    </div> -->

                    <?php
                    $qry="SELECT * from `event` where `event`.`current_status`='ACTIVE' AND `hide`='0'";

                    $res = $conn->query($qry);
                    
                    if ($res->num_rows==1) 
                    
                    {
                    
                    while($row = $res->fetch_assoc()) 
                    {
                    
                    $result=$row['event_id'];
                    
                    }
                    
                    $event_id=$table_name=$result;
                    
                    $qry1="SELECT COUNT(*) as total from `$table_name` where `eliminated`='0'";
                    
                    $res1 = $conn->query($qry1);	
                    
                    $candidate_count = $res1->fetch_assoc();
                    
                    $count=intval($candidate_count['total']);
                        
                    }

                    $stmt = $conn->prepare("SELECT current_stage FROM staging WHERE event_id = ?");
                    $stmt->bind_param("s", $event_id);
                    $stmt->execute();
                    $stmt->bind_result($event_stage);
                    $stmt->fetch();
                    $stmt->close();
                    
                    ?>
                    <h6><font color="red"> Current Candidate count is <?php echo $count ?> </font></h6>
                    </br>
                    <h6><font color="red"> Current stage is <?php echo $event_stage ?> </font></h6>
                    </br>
                    <h7>NB: 1. Please do carefully eliminate the candidates, once done the process is not able to revert</h7></br>
                    <h7>2. Candidate will be removed from end (in the order of least vote count)</h7></br>
                    <h7>3. Make sure that the event is not in vote mode enabled </h7>
                    <div class="changePasswordsec">
                        <form action="eliminate_process.php" name="changePwd" id="changepwdForm" method="post">
                            
                            <div class="na-login-formLabel">
                                <label for="confirmpassword">Confirm Password</label>
                                <input type="text" name="count" id="confirm1password" placeholder="Enter count">
                                <span id='message'></span>
                            </div>
                            <button type="submit" class="btn-submit">Eliminate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>