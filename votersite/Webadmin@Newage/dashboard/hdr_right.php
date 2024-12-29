<?php 
date_default_timezone_set("Asia/Calcutta"); 
$today= date("Y-m-d");
$re = $conn->query('SELECT SUM(count) AS count_sum FROM hit_counter'); 
$ro = $re->fetch_assoc();
$sum_visit = $ro['count_sum']; //total visit count
$re = $conn->query('SELECT SUM(voted_today) AS count_sum FROM hit_counter'); 
$ro = $re->fetch_assoc();
$sum_vote = $ro['count_sum']; //total vote count

 $qry12="select * from `hit_counter` where `hit_counter`.`date`='$today'"; 
								
							
							
							if($result12=$conn->query($qry12))
							{
							
							 if ($result12->num_rows>0) 
	
								{
    
								while($row12 = $result12->fetch_assoc()) 
								{
									$today_visit=$row12['count'];
									$today_vote=$row12['voted_today'];
									
								}}
							}
								else
								{
									$today_visit=0;
									$today_vote=0;
								}

if($today_visit==0)
{
	
	$noti_count=0;
}else
if($today_visit>0)
{
	
$noti_count=1;
if($today_vote>0)
{
	$noti_count=$noti_count+$today_vote;
}
}

?>
<div class="dashboard-hdrRight">
                        <ul>
                            <li title="Notifications" class="notify">
                                <i class="fa fa-bell"></i>
                                <span class="count"><?php echo $noti_count; ?></span>
								<div class="notification-box">
                                    <div class="notification-wrap">
                                        <div class="notificationHdr clearfix">
                                            <h5>Notifications</h5>
                                            <h6><?php echo $noti_count; ?> new</h6>
                                        </div>
                                        <div class="notificationBody">
                                            <ul>
                                                <li>
                                                    Total Visitors
                                                    <span><?php echo $sum_visit; ?></span>
                                                </li>
                                                <li>
                                                    Today's Visitors
                                                    <span><?php echo $today_visit; ?></span>
                                                </li>
                                                <li>
                                                    Total Votes:
                                                    <span><?php echo $sum_vote; ?></span>
                                                </li>
                                                <li>
                                                    Today's Votes
                                                    <span><?php echo $today_vote; ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li title="Change password">
                                <i class="fa fa-unlock-alt"></i>
                            </li>
                            <li title="Role:Admin">
                                <i class="fa fa-user"></i> <span><?php echo $_SESSION['adminname']; ?></span>
                            </li>
                            <li title="Logout">
                               <a href="logout.php"><i class="fa fa-power-off"></i></a>
                            </li>
                        </ul>
                    </div>