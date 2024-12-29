
<?php include("../session/session_check.php");  ?>

<?php include("../database/db.php"); 
								
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

$qry5="select event_name,event_id from `event` where  `current_status`='ACTIVE'"; 
										
									$result5=$conn->query($qry5);
								
 									if ($result5->num_rows>0) 
									{

										while($row5 = $result5->fetch_assoc()) 
										{
										
											$eve_name=$row5['event_name'];
											$eve_id=$row5['event_id'];
										}	
										
										
									}

								
$qry10="SELECT * from config";
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

//echo $config_value[3];

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
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/abin.css">
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
                        <h5>View Candidates:<?php if(isset($_SESSION['eventname'])){echo $_SESSION['eventname'];} else {
	echo $eve_name; 
} ?> </h5>
                    </div>
                     <?php include("hdr_right.php"); ?>
                </div>
                <!-- dashboard content -->
                <div class="dashboard-dynamicContent">
                    <div class="overflow-table viewCandidate">
                        <div class="table-hdr">
                            <div class="table-hdrLeft">
                                <div class="select">
                                     <select id="selectevent"  onchange="setdefault_event(selectevent.value);window.location.reload(); ">

                              <option value="<?php echo $eve_id; ?>">Select an Event</option>

                              <?php 

                                

                                 $qry="select * from `event` where NOT `current_status`='EXPIRED'"; 

                                  $result=$conn->query($qry);

                            

                            

                             if ($result->num_rows>0) 

    

                                {

    

                                while($row = $result->fetch_assoc()) 

                                {

                                    

                                    $id=$row['id'];

                                    $event_id=$row['event_id'];

                                    $event_name=$row['event_name'];

                                 ?>

                                

                                <option value="<?php echo $event_id;  ?>" ><?php echo $event_name;  ?></option>

                                <?php

                                }   

                                    

                                }

                                

                                ?>

                                    

                              

                                

                                

                            </select>
									
									<?php
									
									if(!isset($_SESSION['event_id']))
									{
										
									$qry1="select * from `event` where  `current_status`='ACTIVE'"; 
										
									$result1=$conn->query($qry1);
								
 									if ($result1->num_rows>0) 
									{

										while($row1 = $result1->fetch_assoc()) 
										{
											$event_id=$row1['event_id'];
											$event_name=$row1['event_name'];
										}	
										
										$table_name=$event_id;
									}
									}
									else
									{
										$table_name=$_SESSION['event_id'];
									}
	?>
                                </div>
                            </div>
                            <div class="table-hdrRight">
                                <div class="search-class"><input type="search" name="search" placeholder="Search">
                                    <i class="fa fa-search"></i> </div>
                            </div>
                        </div>
                        <div class="viewCandidate">
                            <div class="viewCandidatewrap display-flex">
								
<?php 

                     
										
								if ($page==1)

							{

								

								$from=0;

								$to=10;

							

							}else

							{

								

								$from=($page*10)-10;

								$to=10;

								

							}
                                 if ($config_value[3]==1)
                                {
                                    $qry2="select * from `$table_name` ORDER BY `id` DESC LIMIT $from, $to ";
                                }
								else
                                {
								$qry2="select * from `$table_name` ORDER BY `vote_count` DESC LIMIT $from, $to ";
                                }
								$result2=$conn->query($qry2);
								
 									if ($result2->num_rows>0) 
									{

										while($row2 = $result2->fetch_assoc()) 
										
										{
											$candidate_name=$row2['candidate'];
											$cand_id=$row2['candidate_id'];
											//$cand_id=$row2['candidate'];
											$row_id=$row2['id'];
											$sector=$row2['sector'];
											$file_name=$row2['file_path'];
											$vote_count=$row2['vote_count'];
											$file_path="images/candidate/";
											$image=$file_path.$file_name;
								?>
                               
								
								<div class="candidate-flex">
                                    <div class="candidate-img">
                                        <img src="<?php echo $image; ?>">
                                    </div>
                                    <h5><?php echo $candidate_name; ?></h5>
                                     <h6><?php echo $sector; ?></h6><div class="vote-count">Vote count: <span><?php echo $vote_count; ?></span></div>
									
									<div class="sharemodal" id="sharemodal">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close"><i class="fa fa-close"></i></span>
                                            <h3><?php echo $candidate_name; ?></h3>

                                            <h5> Vote: <?php echo $vote_count; ?></h5>
                                            <h6 class="green-text"></h6>
                                            <form class="clearfix" action="manipulate_vote.php" method="post" name="frm_manip_vote">
                                                
                                                <div>
                                                <label for="count">New Vote Count:</label><br>
                                                <input type="text" id="count" name="count">
												<input type="hidden" id="row_id" name="row_id" value="<?php echo $row_id; ?>">
												<input type="hidden" id="table_name" name="table_name"  value="<?php echo $table_name; ?>">	
												</div>
                                                <button class="green-btn btn-sec" id="green-btn btn-sec" type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <span class="action-icons">
                                        <a href="edit-candidate.php?eid=<?php echo base64_encode($table_name); ?>&cid=<?php echo base64_encode($cand_id); ?>" title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="" title="add to another event"><i class="fa fa-share-alt"></i></a> 
										<a href="" title="Preview"><i class="fa fa-image"></i></a>
									</span>
                                </div>
								
								
								<?php 
										}
								
									}
								
								
								
	

								
								?>
								
								
								
								
                            </div>
							
							<div class="pagination">
								</br>
                    			<?php include("pagenation_viewcan.php"); ?>

							</div>
                        </div>
						
                    </div>
					
                </div>
            </div>
        </div>
		
    </div>
    </div>
</body>

</html>