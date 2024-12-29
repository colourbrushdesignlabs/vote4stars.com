<?php
//$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

include("../session/session_check.php"); 
include("../database/db.php"); 

	if (isset($_GET['page']))
{
	
	$page=(int)$_GET['page'];
}
else
{
	$page=1;
	//$count=1;
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
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/abin.css">
    <!-- scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/toastr.js"></script>
    <script src="js/home.js"></script>
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <!-- Including our scripting file. -->
   <script type="text/javascript" src="script.js"></script>
   <!-- Including CSS file. -->
   <link rel="stylesheet" href="style.css">
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
                        <h5>View Event: Page-<?php echo $page; ?></h5>
                    </div>
                    <?php  include("hdr_right.php"); ?>
                </div>
                <!-- dashboard content -->
                <div class="dashboard-dynamicContent">
                    <div class="overflow-table">
                        <div class="table-hdr">
                            <div class="table-hdrLeft">
                               <?php //include('sortby.inc'); ?>
                            </div>
                            <div class="table-hdrRight">
                                <div class="search-class">
									</div>
								
									
								<div id="display"></div>
								
								
                            </div>
                        </div>
                        <table width="72%" style="width:100%">
                            <tr>
                                
								<th width="3%">Sl.No</th>
                                <th width="17%">Event Name</th>
                               
								<th width="12%">Created by</th>
                                <th width="19%">Activated Date</th>
                                <th width="17%">End date</th>
								<!--<th>Modified Date</th>-->
                                <th width="14%">Modified by</th>
                                <th width="6%">Status</th>
								<th width="12%">Action</th>
                            </tr>
							<?php
							
						
								
								if ($page==1)
							{
								
								$from=0;
								$to=10;
								$count=1;	
							}
							else
							{
								
								$from=($page*10)-10;
								$to=10;
								
								$count=$from+1;
							}
	                             $qry="select * from `event` ORDER BY `event`.`id` DESC LIMIT $from, $to "; 
								
							
							//$qry="select * from suggest_icon ORDER BY 'time' ASC LIMIT $from, $to "; 
							$result=$conn->query($qry);
							//$count=$from;
							
							 if ($result->num_rows>0) 
	
								{
    
								while($row = $result->fetch_assoc()) 
								{
									$hide=$row['hide'];
									$id=$row['id'];
									
									?>
							
							<tr>
                                
								<td><?php echo $count++; ?></td>
								<td><?php echo $row['event_name']; ?></td>
								
                                <td title="<?php echo "Created time: ".$row['creation_date']; ?>"><?php echo $row['created_by']; ?></td>
								<td title="<?php echo "Activated by: ".$row['Published_by']; ?>"><?php echo $icon=$row['published_date']; ?> </td>
								<td><?php echo $icon=$row['end_date']; ?></td>
								
                                <td title="<?php echo "Last Modified on: ".$icon=$row['modified_time']; ?>"><?php echo $icon=$row['modified_by']; ?></td>
                                <td title="<?php if($row['current_status']=='ACTIVE'){if($row['hide']!=1){echo "Event is visible at front end";}else{echo "Event is not visible at front end";}} ?>" >
									<?php 
									switch($row['current_status'])
									{
										case 'ACTIVE': $font_color="green";
											break;
										case 'INACTIVE': $font_color="Grey";
											break;
										default: $font_color="red";
											break;
									}
									
									echo "<font color='$font_color'><strong>".$row['current_status']."</strong></font>"; ?></td>
                                <td>
                                    <span class="action-icons"><a href="edit_event.php?id=<?php echo base64_encode($row['id']); ?>"><i class="fa fa-edit"></i></a> </span>
                                    <span class="action-icons"><a href="activate_event.php?id=<?php echo base64_encode($row['id']); ?>" title="Activate"><i class="fa fa-repeat"></i></a> </span>
                                    <?php include"toggle.php"; ?>
                                </td>
                           <?php

						
								}
							}
							?>
							
                            
							
                        </table>
						
						</br>
						<div class="pagination">
                    <?php include("pagination_event.php"); ?>
							</div>
						
					</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>