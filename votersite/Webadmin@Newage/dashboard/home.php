
<?php
include("../session/session_check.php"); 
include("../database/db.php"); 
$thispage="index.php";

//$none=x
$qry1="SELECT * from `config`";
$i=0;
$result=$conn->query($qry1);
							

							 if ($result->num_rows>0) 
	
								{
    
								while($row=$result->fetch_assoc()) 
								{
									$i++;
									$config_name[$i]=$row['config_name']; 
									$config_value[$i]=$row['config_value'];
								}
							 }
									

if($config_value[1]==1)
{
	$new_value=2;
}
elseif($config_value[1]==2)
{
	$new_value=1;
	
}

if($config_value[2]==1)
{
	$new_value1=2;
}
elseif($config_value[2]==2)
{
	$new_value1=1;
	
}
if($config_value[3]==1)
{
	$new_value2=2;
}
elseif($config_value[3]==2)
{
	$new_value2=1;
	
}

date_default_timezone_set("Asia/Calcutta"); 
$today= date("d-m-Y");
$today_date= date("Y-m-d");

$qry = "SELECT * FROM `event` WHERE `current_status` = 'ACTIVE' AND `hide` = '0'";
$res = $conn->query($qry);

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $result = $row['event_id'];
	$event_name=$row['event_name'];
	$event_view=$row['event_view'];
    }

  $event_id= $result;
} else {
    //echo "No active events found.";
}


$vote_table="vote_history_".$event_id;
$sql = "SELECT COUNT(*) as total_count FROM $vote_table WHERE `date` = '$today_date'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Fetch the result
    $row = $result->fetch_assoc();
    $todayvotecount=$row['total_count'];
} else {
    $todayvotecount=0;
}
//echo " votecount: ".$todayvotecount;

if(isset($event_id))
{
$event_vote_table= "vote_history_".$event_id;
$sql = "SELECT COUNT(*) as event_total_count FROM $event_vote_table";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Fetch the result
    $row = $result->fetch_assoc();
    $eventtotalvotecount=$row['event_total_count'];
} else {
    $eventtotalvotecount=0;
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
                        <h5>Dashboard</h5>
                    </div>
                    <?php include("hdr_right.php"); ?>
                </div>
                <!-- dashboard content -->
                <div class="dashboard-dynamicContent">
                   <div class="welcome-page">
                     <span class="welcome-tag"> <i class="fa fa-home"></i></span>
                     <h2>Welcome to Newage admin portal</h2>
                     <p>Nice to see you back. To switch suggestions and events, use below button.</p>
                     <div class="suggest-event">
                     <span>Suggestions</span>
                    <div class="">
						<a href="change_status.php?action=suggestion_and_vote&new_value=<?php echo $new_value;  ?>">
						<?php 
						if($config_value[1]==1) 
						{ echo '<i class="fa fa-toggle-off"></i>'; } 
						else 
						{ echo '<i class="fa fa-toggle-on"></i>';}
						
						?> 
							</a>
						 </div><span>Events</span>
                 </div>
					   <div class="suggest-event">
                     <span>Vote: Disable</span>
                    <div class=""> 
						<a href="change_status.php?action=vote_allow&new_value=<?php echo $new_value1;  ?>">
						<?php 
						if($config_value[2]==1) 
						{ echo '<i class="fa fa-toggle-off"></i>'; } 
						else 
						{ echo '<i class="fa fa-toggle-on"></i>';}
						
						?> 
							
							</a></i></div><span>Enable</span>
                 </div>

                 <div class="suggest-event">
                     <span>Candidate: Sort by id</span>
                    <div class=""> 
						<a href="change_status.php?action=Sort&new_value=<?php echo $new_value2;  ?>">
						<?php 
						if($config_value[3]==1) 
						{ echo '<i class="fa fa-toggle-off"></i>'; } 
						else 
						{ echo '<i class="fa fa-toggle-on"></i>';}
						
						?> 
							
							</a></i></div><span>Sort by Vote count</span>
                 </div>

                 <div class="clearfix">
                      <div class="links-section">
                     <h5>Go to pages:</h5>
                     <ul>
                         <li><a href="view-candidate.php"><i class="fa fa-star"></i>Candidate view</a></li>
                         <li><a href="eliminate.php"><i class="fa fa-star"></i> Eliminate</a></li>
                     </ul>
                 </div>
                 <div class="links-section sect-right">
                     <h5>Today's Statistics:</h5>
                     <ul>
                         <li><i class="fa fa-star"></i>Total Views: <span><?php echo $sum_visit; ?></span></li>
                         <li><i class="fa fa-star"></i> Today's views:<span><?php echo $today_visit; ?></span></li>
						 <li><i class="fa fa-star"></i> Total Votes:<span><?php echo $sum_vote; ?></span></li>
						<?php if(isset($event_name))
						{ ?>
						 <li><i class="fa fa-star"></i> Today's vote:<span><?php echo $todayvotecount; ?></span></li>
                     				<li><i class="fa fa-star"></i> <?php echo $event_name; ?>'s vote:<span><?php echo $eventtotalvotecount; ?></span></li>

						<li><i class="fa fa-star"></i><?php echo $event_name; ?>'s view:<span><?php echo $event_view; ?></span></li>
						<?php } ?>
			</ul>
                 </div>
                 </div>
                
                   </div>
                </div>
            </div>
        </div>
    </div>
   
</body>

</html>
