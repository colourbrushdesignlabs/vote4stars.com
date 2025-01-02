

<!DOCTYPE html>
<html>
<?php include("database/db.php"); 
	include("session/session.php"); 


	if(isset($_GET['cid']))
	{
	$cid=base64_decode($_GET['cid']);
		
	}
	else
	{
		echo "<script>location='index.php'</script>";
	}
	
	


?>
	
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
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
    <link rel="stylesheet" href="css/toastr.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/suggestion.css">
    <!-- scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
     <script src="js/toastr.js"></script>
    <script src="js/home.js"></script>
</head>

<body>
	
	<input type="hidden" id="cdtime" name="cdtime" value="<?php echo $_SESSION['countdown'];  ?>">
    <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include("header.php"); ?>
    <!-- main wrapper -->
    <div class="main-class">
        <div class="main-wrapper content-pg">
           
            <!-- paragraph section -->
            <div class="home-content">
             
			
           <?php
				$qry = "SELECT * FROM dynamic_contents where id=".$cid ;
                $result=$conn->query($qry);
				if ($result->num_rows > 0) {
    
                while($row = $result->fetch_assoc()) 
				{
				echo '<p><b><font size='.'"5"'.'>'.$row['caption']."</font></b></p>";
               echo "<p>".$row['content']."</p>";
					$hide=$row['hide'];
               }
				}
				
				if($hide==1)
				{
					echo "<script>location='index.php'</script>";
					
				}
				
				?>


            </div>
        </div>
    </div>
    <!-- main wrapper ends -->
    <!-- footer -->
    <footer>
        <!-- top footer -->
        <?php include "footer.inc"; ?>
        <!-- bottom footer ends -->
    </footer>
    <!-- End:Footer -->
</body>

</html>