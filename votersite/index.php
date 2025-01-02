

<?php 
define("SITE_KEY","6LdmhuUUAAAAAJdBBFU-Re1BXQ2ECZpokf6kB9iC");
include("database/db.php");
include("session/session.php");
$_SESSION['success']=(isset($_SESSION['success'])) ? (int)$_SESSION['success'] : 0;
include("countdowntimer.php");
$stmt = $conn->prepare("SELECT config_value FROM web_configurations WHERE id = ?");
$stmt->bind_param("i", $config_id);
$config_id = 1;
$stmt->execute();
$stmt->bind_result($web_title);
$stmt->fetch();
$stmt->close();
$_SESSION['title']=$web_title;
//$_SESSION['title'];
$qry="SELECT * from `config`";
$i=0;
$result=$conn->query($qry);
							

							 if ($result->num_rows>0) 
	
								{
    
								while($row=$result->fetch_assoc()) 
								{
									$i++;
									$config_name[$i]=$row['config_name']; 
									$config_value[$i]=$row['config_value'];
								}
							 }
									



        if($config_value[1]==2)
        
        {
            
            echo "<script>location='allcandidate.php'</script>";
        }

$qry20="select * from `file_manager` where `id`='1'";
$result20=$conn->query($qry20);
							
							
							 if ($result20->num_rows>0) 
	
								{
    
								while($row20 = $result20->fetch_assoc()) 
								{
									$old_file=$row20['file_name'];
									$title=$row20['titile'];
									$bannerurl=$row20['url'];
								}
							 }



$banner_path="Webadmin@Newage/dashboard/images/banner/".$old_file;

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	
	<!--toaster-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<!--toaster-->
	
	
    <title>
<?php 
$stmt = $conn->prepare("SELECT config_value FROM web_configurations WHERE id = ?");
$stmt->bind_param("i", $config_id);
$config_id = 1;
$stmt->execute();
$stmt->bind_result($web_title);
$stmt->fetch();
$stmt->close();
echo $web_title;
 ?> 
</title>
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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/toastr.css">
    <link rel="stylesheet" href="css/suggestion.css">
    <!-- scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/home.js"></script>
    <script src="js/toastr.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>	
	
<!--	<script src="js/google.js"></script> -->
	
	
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'suggestion'}).then(function(token) {
      document.getElementById("gtoken").value=token;
    });
});
</script>
	

</head>
	

<body onload=" checktoast(<?php echo $_SESSION['success']; ?>); startTime();">
	
	 <?php $_SESSION['success']=0; ?>
	 
    <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include("header.php"); ?>
    <!-- main wrapper -->
    <div class="main-class">
        <div class="main-wrapper home-pg">
            <!-- banner -->
           <div class="na-banner">
                <div class="na-banner-img">
                   <a href="<?php echo $bannerurl; ?>" target="_blank">    <img class="award-img" src="<?php echo $banner_path; ?>" alt="Award"></a>
					
					
					<div class="na-banner-content">
                            <?php 
								$button_stat=1;
						if($button_stat!=1)
						{
							?>
                            <button class="green-btn btn-submit">Fill the form</button>
					<?php } ?>	
					
                        </div>
                       
					
                </div>
			    
            </div>
            <!-- banner ends -->
            <!-- suggestion box -->
            <div class="na-suggestion-box clearfix" class="scrollbar" id="style-2">
                <a title="Close" class="close"><img src="images/close.png" alt="close"></a>
                <div class="suggestion-hdr">
                    <div class="top-headerWrap">
                        <div class="left-hdrlogo"><img src="Webadmin@Newage/dashboard/images/Logo/Logo.png" alt="LOGO"></div>
                        <div class="right-hdr-logo"><img src="Webadmin@Newage/dashboard/images/Logo/Award.png" alt="LOGO"></div>
                    </div>
                </div>
                <div class="na-suggestion-form">
                    <form action="suggestion_proc.php" name="suggest"  id="submitForm" method="post" >
                        <div class="na-suggestion-formLabel">
							<input type="hidden" id="gtoken" name="gtoken">
                            <label for="icon">Your icon</label>	
                            <input type="text" name="icon" id="icon" placeholder="Suggest your Change Maker">
                        </div>
                        <div class="na-suggestion-formLabel">
                            <label for="sector">Icons sector</label>
                            <input type="text" name="sector" id="sector" placeholder="Sector">
                        </div>
                        <div class="na-suggestion-formLabel"> <label for="opt">Why you opt</label>
                            <textarea rows="4" type="text" name="opt" id="opt" placeholder="Why you opt"></textarea>
                        </div>
                        <div class="na-suggestion-formLabel"> <label for="name">Your name</label>
                            <input type="text" name="name" id="name" placeholder="Your name"> </div>
                        <div class="na-suggestion-formLabel"> <label for="yourSector">Your sector</label>
                            <input type="text" name="yourSector" id="yourSector" placeholder="Your sector"> </div>
                        <div class="na-suggestion-formLabel"> <label for="mail">mail id</label>
                            <input type="email" name="mail" id="mail" placeholder="Email">
							<input type="hidden" id="cdtime" name="cdtime" value="<?php echo $_SESSION['countdown'];  ?>">
                        </div>
						
                        <button type="submit" class="btn-submit" >Submit</button>
						
						
						
                    </form>
					
                </div>

            </div>
			
			
			
            <!-- paragraph section -->
            <div class="home-content">
                
                    
                     <?php
				$qry2 = "SELECT * FROM dynamic_contents where id=2" ;
                $result2=$conn->query($qry2);
				
				if ($result2->num_rows > 0) {
    
                while($row2 = $result2->fetch_assoc()) 
				{
			
              echo $row2['content'];
				
               }
				}
				
				?>
                    
                
            </div>
        </div>
    </div>
    <!-- main wrapper ends -->
    <!-- footer -->
    <footer>
        <!-- top footer -->
        <?php
       
        include "footer.inc"; 
       
        
        ?>
        
       
        <!-- bottom footer ends -->
    </footer>
    <!-- End:Footer -->
</body>

</html>
