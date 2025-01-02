<!-- <script>
    
    setTimeout(function() {
  location.reload();
}, 30000);
    
</script> -->

<?php include("database/db.php"); 

	include("session/session.php");
	include("countdowntimer.php");
define("SITE_KEY","6LdmhuUUAAAAAJdBBFU-Re1BXQ2ECZpokf6kB9iC");


$id=base64_decode($_GET['id']);
 if(!isset($_GET['tab']))
 
 {
    
$qry0="SELECT * from `event` where `event`.`current_status`='ACTIVE'";
$res0 = $conn->query($qry0);

	if ($res0->num_rows==1) 

	

{

    

while($row0 = $res0->fetch_assoc()) 

{
$table=$row0['event_id'];
}


	} 
	
	$table_name=$table;
     
     
 }
 else
 {
     
     $table_name=base64_decode($_GET['tab']);
 }


$qry="SELECT * from `$table_name` where `$table_name`.`id`='$id'";
$res = $conn->query($qry);

	if ($res->num_rows==1) 

	

{

    

while($row = $res->fetch_assoc()) 

{

$candidate=$row['candidate'];
$sector=$row['sector'];
$description=html_entity_decode($row['description'], ENT_QUOTES, 'UTF-8');
$vote_count=$row['vote_count'];
$file_name=$row['file_path'];
$file_path="Webadmin@Newage/dashboard/images/candidate/";
$image=$file_path.$file_name;
$cid=$row['id'];
$candidate_id=$row['candidate_id'];
$eliminated_status=$row['eliminated'];
}


	}

else
{
	echo "<script>location='allcandidate.php'</script>";
}



$enc_id=base64_encode($cid);
  $enc_tab=base64_encode($table_name);
											
 $url='https://www.newageicon.com/vote.php?id='.$enc_id.'&tab='.$enc_tab;

$shareurl=$url;


//fingerprint

// Collect browser and system data
$user_agent = $_SERVER['HTTP_USER_AGENT'];
//$ip_address = $_SERVER['REMOTE_ADDR'];
$ip_address= "255.255.255.255";
$accept_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$screen_resolution = isset($_POST['screen_resolution']) ? $_POST['screen_resolution'] : '';
$timezone = isset($_POST['timezone']) ? $_POST['timezone'] : '';

// Combine the collected data
$fingerprint_data = $user_agent . $ip_address . $accept_language . $screen_resolution . $timezone;

// Hash the data to create a fingerprint
$fingerprint = hash('sha256', $fingerprint_data);



//fingerprint


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta property="og:title" content="<?php echo "Vote for: "; echo $candidate;  ?>" />
    <meta property="og:description" content="<?php echo strip_tags($description); ?>" />
    <meta property="og:image" itemprop="image" content="<?php echo "https://newageicon.com/Webadmin@Newage/dashboard/images/candidate/".$file_name; ?>" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
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
    
    <meta name="theme-color" content="#ffffff">
    <!-- stylesheets -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/toastr.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/suggestion.css">
    <!-- scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/toastr.js"></script>
    <script src="js/home.js"></script>
	<script src="js/abin.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>	
<script src="js/google.js">

</script>
	
	<script>

grecaptcha.ready(function() {

    grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'Vote'}).then(function(token) {

      document.getElementById("gtoken").value=token;

    });

});

</script>

	
</head>

<body onload="checktoast_vote(<?php echo $_SESSION['success_vote']; ?>)" >
	<?php 
	//echo $_SESSION['success_vote']; 
	?>
    <?php unset($_SESSION['success_vote']); ?>
	
    <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
     <?php include("header.php"); ?>
    <!-- main wrapper -->
    <div class="main-class">
        <div class="main-wrapper content-pg">
            <!-- candidate -->
            <div class="candidatePage">
                <a href="allcandidate.php" class="back-btn"><i class="fa fa-chevron-left"></i>
                            <span>Back</span></a>
                <div class="candidateFlex">
                    <div class="candidateImg">
                        <img src="<?php echo $image; ?>">
                    </div>
                    
                    <div class="candidateTitle">
                        <h4><?php echo $candidate; ?></h4>
                        <p><?php echo $sector; ?></p>
                    </div>
                </div>
                <div class="candidateContent">
                    <?php echo $description; ?>
                </div>
                <div class="btn-candidate">
                    <form name="vote" action="voteprocess.php" method="POST">
					
                    <input type="hidden" value="<?php echo $cid;  ?>" name="id">
			 <input type="hidden" value="<?php echo $candidate;  ?>" name="candidate_name">
                    <input type="hidden" value="<?php echo $candidate_id;  ?>" name="cid">
                    <input type="hidden" value="<?php echo $table_name;  ?>" name="tab">
					<input type="hidden" id="gtoken" name="gtoken">
					<input type="hidden" id="cdtime" name="cdtime" value="<?php echo $_SESSION['countdown'];  ?>">
                    <input type="hidden" name="visitor_id" id="visitor_id" value="<?php echo $fingerprint;  ?>">
						<?php if($eliminated_status==0){ ?>
                    <button class="green-btn btn-submit btn-vote" type="submit">Vote</button>
						<?php } ?>
                    </form>
                    <div class="share-candidate btn-sharelink">
                         
                        <a  class="open-popup-link">
                            <i class="fa fa-share-alt"></i>
                            <span>Share</span>
                        </a>
                    </div>
                   <div class="sharemodal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close"><i class="fa fa-close"></i></span>
                                    <h4 class="share-candidate-title">Share this candidate:</h4>
                                    <div class="candidate-shareWrap">
                                        <ul>
                                            <li>
                                                <a class="facebook customer share" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($shareurl); ?>" title="Facebook share" target="_blank"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a class="twitter customer share" href="https://twitter.com/share?url=<?php echo urlencode($shareurl); ?>&amp;text=Vote for <?php echo $candidate; ?> &amp;hashtags=poweredby-www.penoft.com" title="Twitter share" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a class="google_plus customer share" href="whatsapp://send?text=<?php echo urlencode($shareurl); ?>" title="Share via Whatsapp" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                            </li>
                                            <!--<li>
                                                <a class="linkedin customer share" href="https://www.linkedin.com/shareArticle?mini=true&url=  title="linkedin Share" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                            </li>-->
                                        </ul>
                                        <p>Share this link:</p>
                                        <div class="copy-btn clearfix">
											
                                             <input type="text" value="<?php echo $shareurl;  ?>" class="copyInput">
                                            <button class="btn-sec btn-copy">Copy text</button>
                                        </div>
                                    </div>
                                </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main wrapper ends -->
    <!-- footer -->
   <footer>

        <!-- top footer -->

        <?php include "footer.inc"; ?>
        <?php  $_SESSION['success_vote']=0; ?>

        <!-- bottom footer ends -->

    </footer>

    <!-- End:Footer -->
</body>

</html>
