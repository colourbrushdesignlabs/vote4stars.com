<!DOCTYPE html>



<?php include("database/db.php"); 



	include("session/session.php"); 

include("countdowntimer.php");



$qry10="SELECT * from `config`";

$i=0;

$result10=$conn->query($qry10);

							



							 if ($result10->num_rows>0) 

	

								{

    

								while($row10=$result10->fetch_assoc()) 

								{

									$i++;

									$config_name[$i]=$row10['config_name']; 

									$config_value[$i]=$row10['config_value'];

								}

							 }

									







        if($config_value[1]==1)

        

        {

            

            echo "<script>location='index.php'</script>";

        }



$qry="SELECT * from `event` where `event`.`current_status`='ACTIVE' AND `hide`='0'";

$res = $conn->query($qry);

	if ($res->num_rows==1) 
{

while($row = $res->fetch_assoc()) 

{

$result=$row['event_id'];

}



$event_id=$table_name=$result;
$url_tail_end="&tab=".$table_name;
$qry1="SELECT COUNT(*) as total from `$table_name` where `eliminated`='0'";

	$res1 = $conn->query($qry1);	

	$candidate_count = $res1->fetch_assoc();

$count=intval($candidate_count['total']);

	

// get staging v2.0.0 2024 OCT
$stmt = $conn->prepare("SELECT current_stage FROM staging WHERE event_id = ?");
$stmt->bind_param("s", $event_id);
$stmt->execute();
$stmt->bind_result($event_stage);
$stmt->fetch();
$stmt->close();


?>

<html>



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

</head>



<body onLoad="check_more(<?php echo $count; ?>);">

	

	<input type="hidden" id="cdtime" name="cdtime" value="<?php echo $_SESSION['countdown'];  ?>">

	

    <!--[if lt IE 9]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

    <![endif]-->

   <?php include("header.php"); ?>

      

    <!-- main wrapper -->

    <div class="main-class">

        <div class="main-wrapper home-pg">

            <!-- banner

            <div class="na-banner">

                <div class="main-banner-img">

                    <img class="award-img" src="images/banner-content.png" alt="Award">

                </div>

            </div> -->

            <!-- banner ends -->

            <div class="cand-wrap">

                <div class="candidate-wrapper">

                    <div class="wrap-section">

                        <h2 class="line">
                        <?php
                        switch ($event_stage) {
                            case 1:
                                echo "Star100";
                                break;
                            case 2:
                                echo "Super 50";
                                break;
                            case 3:
                                echo "Club 25";
                                break;
                            case 4:
                                echo "Club Hall of Fame: The top 10 list";
                                break;
                            default:
                                echo "NewAgeIcons";
                                break;
                        }
                        
                        
                        ?>
                        </h2>

                        <div class="home-candidateWrap clearfix display-flex">

                            <!--candidate start-->

							<?php 
                            if($count<8)
                            {
                                $first_lim=$count;
                                
                            }
                            else
                            {
                                 $first_lim=8;
                                
                            }
                            if($config_value[3]==2)
                            {
                                $qry2="select * from `$table_name` where `eliminated`='0' ORDER BY `vote_count` DESC,`id` ASC LIMIT 0,$first_lim";

                            }
                            else
                            {
                                $qry2="select * from `$table_name` where `eliminated`='0' ORDER BY `id` DESC LIMIT 0,$first_lim";

                            }
							

								$res2 = $conn->query($qry2);



								if ($res2->num_rows>0) 



	



									{



    



										while($row2 = $res2->fetch_assoc()) 



										{



											$candidate=$row2['candidate'];

											$sector=$row2['sector'];

											$description=$row2['description'];

											$file_name=$row2['file_path'];
                                            $vote_count=$row2['vote_count'];

											$file_path="Webadmin@Newage/dashboard/images/candidate/";

											$image=$file_path.$file_name;

											$id=$row2['id'];

											$enc_id=base64_encode($id);
											$url_tail_end=base64_encode($table_name);

											$url="https://www.newageicon.com/vote.php?id=".$enc_id."&tab=".$url_tail_end;

											



										



		

							?>

							<div class="home-candidate">

							<!-- 	 <a href="vote.php?id=<?php echo base64_encode($id);?>&tab=<?php echo base64_encode($table_name);  ?>"> -->

                                <div class="home-candidateImg">

                                    <img src="<?php echo $image; ?>">

                                </div>

                                <h4 class="home-candidateName"><?php echo $candidate; ?></h4>
                                <!--<h1 class="home-candidateName"><?php echo $vote_count; ?></h1> -->
                                <p class="home-candidateTitle"><?php echo $vote_count; ?></p>

							<!--	<div class="vote-count">Vote count: <span>8</span></div> -->

								<!--	</a> -->

                                <div class="inline-btns-home">

                                   <a href="vote.php?id=<?php echo base64_encode($id);?>&tab=<?php echo base64_encode($table_name);  ?>"><button type="button" class="green-btn btn-sec btn-vote" >View</button></a>

                                    <div class="share-candidate btn-sharelink">

                                        <a class="open-popup-link">

                                            <i class="fa fa-share-alt"></i>

                                            <!-- <span>Share</span> -->

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

                                                        <a class="facebook customer share" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($url); ?>" title="Facebook share" target="_blank"><i class="fa fa-facebook"></i></a>

                                                    </li>

                                                    <li>

                                                        <a class="twitter customer share" href="https://twitter.com/share?url=<?php echo urlencode($url); ?>&amp;text=Vote for <?php echo $candidate; ?> &amp;hashtags=poweredby-www.penoft.com" title="Twitter share" target="_blank"><i class="fa fa-twitter"></i></a>

                                                    </li>

                                                    <li>

                                                        <a class="google_plus customer share" href="whatsapp://send?text=<?php echo urlencode($url); ?>" title="Share via Whatsapp" target="_blank"><i class="fa fa-whatsapp"></i></a>

                                                    </li>

                                                    

                                                </ul>

                                                <p>Share this link:</p>

                                                <div class="copy-btn clearfix">

                                                    <input type="text" value="<?php echo $url ; ?>" class="copyInput">

                                                    <button class="btn-sec btn-copy">Copy text</button>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

							

							

							<?php 

											}

								}

											

											?>

							<!--candidate end-->

                            

                        </div>

                       <div id="more"> <a class="moreless-button">More to explore</a></div>

                        <div class="moretext">

                            <div class="home-candidateWrap display-flex">

								

								<?php 

							$new_count=$count-1;
                            $secondlimit=$first_lim;
                            if($config_value[3]==2)
                            {
							$qry3="select * from `$table_name` where `eliminated`='0' ORDER BY `vote_count` DESC,`id` ASC LIMIT $secondlimit,$new_count";
                            }
                            else
                            {
                                $qry3="select * from `$table_name` where `eliminated`='0' ORDER BY `id` DESC LIMIT $secondlimit,$new_count";
                            
                            }
								$res3 = $conn->query($qry3);



								if ($res3->num_rows>0) 



	



									{



    



										while($row3 = $res3->fetch_assoc()) 



										{



											$candidate=$row3['candidate'];

											$sector=$row3['sector'];

											$description=$row3['description'];

											$file_name=$row3['file_path'];

											$file_path="Webadmin@Newage/dashboard/images/candidate/";

											$image=$file_path.$file_name;

											$id=$row3['id'];

                                           						 $enc_id=base64_encode($id);
											$url_tail_end=base64_encode($table_name);

											$url="https://www.newageicon.com/vote.php?id=".$enc_id."&tab=".$url_tail_end;

										



		

							?>

								<div class="home-candidate">

                                <div class="home-candidateImg">

                                    <img src="<?php echo $image; ?>">

                                </div>

                                <h4 class="home-candidateName"><?php echo $candidate; ?></h4>

                                <p class="home-candidateTitle"><?php echo $sector; ?></p>

                                <div class="inline-btns-home">

                                   <a href="vote.php?id=<?php echo base64_encode($id);?>&tab=<?php echo base64_encode($table_name);  ?>"><button type="button" class="green-btn btn-sec btn-vote" >View</button></a>

                                    <div class="share-candidate btn-sharelink">

                                        <a class="open-popup-link">

                                            <i class="fa fa-share-alt"></i>

                                            <!-- <span>Share</span> -->

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

                                                        <a class="facebook customer share" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($url); ?>" title="Facebook share" target="_blank"><i class="fa fa-facebook"></i></a>

                                                    </li>

                                                    <li>

                                                        <a class="twitter customer share" href="https://twitter.com/share?url=<?php echo urlencode($url); ?>&amp;text=Vote for <?php echo $candidate; ?> &amp;hashtags=poweredby-www.penoft.com" title="Twitter share" target="_blank"><i class="fa fa-twitter"></i></a>

                                                    </li>

                                                    <li>

                                                        <a class="google_plus customer share" href="whatsapp://send?text=<?php echo urlencode($url); ?>" title="Share via Whatsapp" target="_blank"><i class="fa fa-whatsapp"></i></a>

                                                    </li>

                                                    

                                                </ul>

                                                <p>Share this link:</p>

                                                <div class="copy-btn clearfix">

                                                    <input type="text" value="<?php echo $url; ?>" class="copyInput">

                                                    <button class="btn-sec btn-copy">Copy text</button>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

							

							

							<?php 

											}

								}

											

											?>

                               

								

								

                               

                            </div>

                        </div>

                    </div>

                    <!-- sponsors -->

                    <div class="sponsors">

                        <h2 class="line">Our sponsors</h2>

                        <div class="sponsors-wrap">

                            <div class="single-sponsor">

                            <a href="https://www.penoft.com" target = "_blank"><img src="images/PENOFTLOGOWHITE.png" alt="logo"></a>

                            </div>

                            <div class="single-sponsor">

                            <a href="https://www.dbfsindia.com/index.html" target = "_blank"><img src="images/dbfslogo.png" alt="logo"></a>

                            </div>

                            <div class="single-sponsor">

                            <a href="https://www.livenewage.com" target = "_blank" ><img src="images/live.png" alt="logo"></a>

                            </div>

                            <div class="single-sponsor">

                                <img src="images/new.jpg" alt="logo">

                            </div>

                            

                            <div class="single-sponsor">

                                <a href="https://www.brandmore.in" target = "_blank"><img src="images/brandmorelogo.jpg" alt="logo"></a>

                            </div>

                            

                            <div class="single-sponsor">

                                <a href="https://www.livenewage.com" target = "_blank"><img src="images/NDigitallogo.png" alt="logo"></a>

                            </div>

                            
                            <div class="single-sponsor">

                                <a href="https://www.dhankibaat.org" target = "_blank"><img src="images/NewAgeBusinessCard.png" alt="logo"></a>

                            </div>

                            

                            

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <a href="#" id="scroll" style="display: none;"></a>

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



<?php 

		

	}



?>
