<?php 
include("../session/session_check.php"); 
include("../database/db.php");
$_SESSION['editsuccess']=(isset($_SESSION['editsuccess'])) ? (int)$_SESSION['editsuccess'] : 0;
$id=base64_decode($_GET['id']);
$newid=intval($id);
$qry="select * from `dynamic_contents` where `id`='$id'"; 
								
							
							//$qry="select * from suggest_icon ORDER BY 'time' ASC LIMIT $from, $to "; 
							$result=$conn->query($qry);
							
							
							 if ($result->num_rows==1) 
	
								{
    
								while($row = $result->fetch_assoc()) 
								{
								$caption=$row['caption'];
								$description=$row['content'];
								$hide=$row['hide'];
							    $menu_name=$row['menu'];
									
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
	<link rel="stylesheet" href="css/abin.css">
    <link rel="stylesheet" href="fonts/font-awesome/font-awesome.min.css">

    <link rel="stylesheet" href="css/styles.css">
    <!-- scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/toastr.js"></script>
    <script src="js/home.js"></script>
  
	
    <script src="js/abin.js"></script>
	<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
	
</head>

<body  onload="checktoast(<?php echo $_SESSION['editsuccess']; ?>);">
	<?php unset($_SESSION['editsuccess']); ?>
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
                        <h5>DYNAMIC CONTENTS--><?php echo $menu_name; ?></h5>
                    </div>
                    <?php include("hdr_right.php"); ?>
                </div>
                <!-- dashboard content -->
                <div class="dashboard-dynamicContent">
                    <div class="add-candidateFormWrap">
                        <form action="edit_dynamic_contents_process.php" name="dynamic" id="addCandidateForm" method="post">
                            <div class="na-login-formLabel">
                               
                            </div>
							
                            <div class="na-login-formLabel">
                                <label for="name">Event Name</label>
								<?php if($newid==6){?>
								<input type="text" name="menuname" id="menuname" value="<?php echo $menu_name; ?>" placeholder="Menu Name" required >
								<?php
								}
								else
								{
								?>
								<input type="hidden" name="menuname" id="menuname" value="<?php echo $menu_name; ?>" placeholder="Menu Name">
								<?php 
								}
								?>
								<?php if($newid==6){?>
								<input type="text" name="caption" id="caption" value="<?php echo $caption; ?>" placeholder="Content Name" required>
								<?php
								}
								else
								{
								?>
								<input type="text" name="captio" id="captio" value="<?php echo $caption; ?>" placeholder="Content Name" disabled>
								<input type="hidden" name="caption" id="caption" value="<?php echo $caption; ?>" placeholder="Content Name">
								
								<?php 
								}
								?>
								
								<input type="hidden" name="id" id="id" value="<?php echo $newid; ?>" maxlength="" >
								
								
                            </div>
									
							
							
                            <div class="na-login-formLabel">
                                <!--<form name="wc-richTextEditor" id="wc-richTextEditor-form" class="wc-richTextEditor" action="" method="post">
									-->
						
                                  <!-- Editor Control Box -->
                                    
									<input type="text" id="editor1" name="editor1" rows="10"  value="<?php echo $description; ?>" >

									
								<?php if ($newid==6)
									{ ?>
								<select id="hide" name="hide">
								  <option value="show">show</option>
								  <option value="hide" <?php if($hide==1){echo "selected='selected'";} ?> >hide</option>
								  
								</select>
									<?php } ?>
                               <div>    
									<button type="submit" id="submit" class="btn-submit">Update</button>
								<button type="button" id="submit" class="btn-cancel" onClick="goto_index();">Cancel</button>
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