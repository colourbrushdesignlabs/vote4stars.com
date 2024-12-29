<?php 
include("../database/db.php"); 
include("../session/session.php");
$qry1="select * from `file_manager` where `id`='2'";
$result=$conn->query($qry1);
							
							
							 if ($result->num_rows>0) 
	
								{
    
								while($row = $result->fetch_assoc()) 
								{
									$old_file=$row['file_name'];
									$title=$row['titile'];
								}
							 }



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
    <link rel="stylesheet" href="css/abin.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/toastr.js"></script>
    <script src="js/home.js"></script>
	 <script src="js/abin.js"></script>
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
                        <h5>Update Logo</h5>
                    </div>
                    <?php include("hdr_right.php") ?>
                </div>
                <!-- dashboard content -->
                <div class="dashboard-dynamicContent">
					
                    <div class="changeBannersec">
                        <form action="update_logo_process.php" name="changeBanner" id="changebannerForm" method="post" enctype="multipart/form-data" autocomplete="on">
                            <div class="na-login-formLabel">
                                <label for="banner">New Password</label>
                                <input type="text" name="banner" id="banner" placeholder="Banner Title" disabled value="<?php echo $title; ?>">
                            </div>
                              <div class="file-upload">
                                <label for="bannerfile">Upload file</label>
                                <input type="file" name="image" id="bannerfile" placeholder="" accept="image/*" required>
                            </div>
                            <div class="banner-btn-sec clearfix">
                                <button type="submit" id="submit" class="btn-submit">Submit</button>
                            <button type="button" id="submit" class="btn-cancel" onClick="goto_home();">Cancel</button>
                            </div>
                            
                        </form>
						<?php $file_path="images/Logo/".$old_file; ?>
						<img src="<?php echo $file_path; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
