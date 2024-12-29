<?php
include("../session/session_check.php"); 
include("../database/db.php"); 
$thispage="suggestion_sortby.php";
$searchname="nothing";
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;


if (isset($_GET['action']))
	
{

	$from=($page*10)-10;
	$action=$_GET['action'];
	switch ($action) {
    case "name_asc":
			$starred=0;
       $qry="SELECT * FROM `suggest_icon` ORDER BY `youricon` ASC LIMIT $from,10";
			$sorted_by="Sorted Name by Ascending-->Page ".$page;
        break;
    case "name_desc":
			$starred=0;
     $qry="SELECT * FROM `suggest_icon` ORDER BY `youricon` DESC LIMIT $from,10";
			$sorted_by="Sorted Name by Descending-->Page ".$page;
        break;
    case "sector":
			$starred=0;
        $qry="SELECT * FROM `suggest_icon` ORDER BY `iconsector` ASC LIMIT $from,10";
			$sorted_by="Sorted Sector by Ascending-->Page ".$page;
        break;
	case "date_asc":
			$starred=0;
       $qry="SELECT * FROM `suggest_icon` ORDER BY `id` ASC LIMIT $from,10";
			$sorted_by="Sorted by Date Ascending-->Page ".$page;
        break;
	case "date_desc":
			$starred=0;
        $qry="SELECT * FROM `suggest_icon` ORDER BY `id` DESC LIMIT $from,10";
			$sorted_by="Sorted by Date Descending-->Page ".$page;
        break;	
	case "starred":
			$starred=1;
       $qry="SELECT * FROM `suggest_icon` WHERE `starred`=1 ORDER BY `id` ASC LIMIT $from,10";
			$sorted_by="Sorted by Starred-->Page ".$page;
        break;	
			
	 case "index":
        echo "<script>location='index.php'</script>";
			break;
    default:
        echo "<script>location='index.php'</script>";
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
	<link rel="stylesheet" href="css/abin.css">
    <!-- scripts -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/toastr.js"></script>
    <script src="js/home.js"></script>
	<script src="js/abin.js"></script>
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <!-- Including our scripting file. -->
   <script type="text/javascript" src="script.js"></script>
   <!-- Including CSS file. -->
   <link rel="stylesheet" href="style.css">

	
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
                        <h5><?php echo "SUGGESTION-->".$sorted_by; ?></h5>
                    </div>
                    <?php include("hdr_right.php"); ?>
                </div>
                <!-- dashboard content -->
                <div class="dashboard-dynamicContent">
                    <div class="overflow-table">
                        <div class="table-hdr">
                            <div class="table-hdrLeft">
                                  <?php include('sortby.inc'); ?>
                            </div>
                            <div class="table-hdrRight">
                                <div class="search-class">
									<form name="frm_search" action="search_icon.php" id="" method="post">
									<input type="search" list="display" name="search" placeholder="Search by name" id="search" >
                               <i class="fa fa-search"></i> </div>
								<input type="hidden" id="returnid" name="iconid">
								<input type="submit" placeholder="" value="search" id="">
									</form>
								<datalist id="display"></datalist>
								
								
                            </div>
                        </div>
                        <table style="width:100%">
                            <tr>
                                <th>Starred</th>
								<th>Sl.No</th>
                                <th>Icon name</th>
                                <th>Icon sector</th>
								<th>Why opted</th>
                                <th>Suggested by</th>
                               
								<th>Received Time</th>
                                <th>Actions</th>
                            </tr>
							<?php
							
						
							
							

	  
	                             //$qry="select * from suggest_icon ORDER BY 'time' ASC LIMIT $from, $to "; 
								
							
							//$qry="select * from suggest_icon ORDER BY 'time' ASC LIMIT $from, $to "; 
							$result=$conn->query($qry);
							$count=$from+1;
							
							 if ($result->num_rows>0) 
	
								{
    
								while($row = $result->fetch_assoc()) 
								{
									$star=$row['starred']; 
									$id=$row['id'];
									?>
							
							<tr>
                                <?php include("star.php"); ?>
								<td><?php echo $count++; ?></td>
								<td><?php echo $row['youricon']; ?></td>
                                <td><?php echo $row['iconsector']; ?> </td>
								<td title="<?php echo $row['whyopted']; ?>" ><?php  
								
								$short_whyopted=substr($row['whyopted'],0,18);	
								echo str_pad($short_whyopted,20,"."); ?></td>
                                <td><?php echo $row['yourname']; ?></td>
                                <td><?php echo $row['time']; ?></td>
                                <td>
                                    <span class="action-icons"><i class="fa fa-edit"></i> </span>
                                    <span class="action-icons"><i class="fa fa-share"></i> </span>
                                    <span class="action-icons"><i class="fa fa-trash"></i> </span>
                                </td>
                           <?php

						
								}
							}
							?>
							
                            
							
                        </table>
						
						</br>
						<div class="pagination">
                    <?php if($starred==1){include("pagination_starred.php");}else { include("pagenation_sort.php");} ?>
							</div>
						
					</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>