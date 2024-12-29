<?php $qry11="select * from `file_manager` where `id`='2'";
$result11=$conn->query($qry11);
							
							
							 if ($result11->num_rows>0) 
	
								{
    
								while($row11 = $result11->fetch_assoc()) 
								{
									$old_file=$row11['file_name'];
									$title=$row11['titile'];
								}
							 }
?>

<div class="dashboard-left">
                <div class="dashboard-logo">
                    <img src="images/Logo/<?php echo $old_file; ?>" alt="logo">
                </div>
                <ul class="menu-class">
					<li><a href="home.php" class="menu-link">Home</a>
                       
                        
                    </li>
                    <li><a href="index.php">Suggestion </a>
                        <span><i class="fa fa-chevron-down menu-link"></i></span>
                        <ul class="sub-menu-class">
                            <li><a href="index.php">view all</a></li>
                            <li><a href="suggestion_sortby.php?action=starred">starred</a></li>
							<li><a href="create_xls.php?item=all">download All</a></li>
							<li><a href="create_xls.php?item=starred">download Starred</a></li>
                        </ul>
                    </li>
                    <li><a href="" class="menu-link">Candidate </a>
                        <span><i class="fa fa-chevron-down menu-link"></i></span>
                        <ul class="sub-menu-class">
                            <li><a href="add-candidate.php">add new candidate</a></li>
                            <li><a href="view-candidate.php">view candidate</a></li>
							<li><a href="">publish</a></li>
                        </ul>
                    </li>
					<li><a href="view_event.php" class="menu-link">Manage Events</a>
                        <span><i class="fa fa-chevron-down menu-link"></i></span>
                        <ul class="sub-menu-class">
                            
                            <li><a href="view_event.php">view all events</a></li>
							<li><a href="add-event.php">add new event</a></li>
							<li><a href="">current event</a></li>
							
                        </ul>
                    </li>
					
                            
							 <?php 
					require_once("../database/db.php");
                $i=1;              
                $qry4 = "SELECT * FROM `dynamic_contents` ORDER BY id LIMIT 1,6" ;
                $result4=$conn->query($qry4);
				
				if ($result4->num_rows >0) 
				{
    
                while($row4 = $result4->fetch_assoc()) 
				{
					
             		$id[$i]=$row4['id'];
					$dynamic_menu[$i]=$row4['caption'];
					$i++;
					
               }
				
					
				}
				
                            ?> 
							
						
					<li><a href="#" class="menu-link">Dynamic Contents</a>
                        <span><i class="fa fa-chevron-down menu-link"></i></span>
                        <ul class="sub-menu-class">
						<?php
							
						for ($j=1;$j<7;$j++)
						{ ?>
                            <li><a href="edit_dynamic_contents.php?id=<?php echo base64_encode($id[$j]); ?>"><?php echo $dynamic_menu[$j]; ?></a></li>
							<?php } ?>
                        </ul>
                    </li>
                 
                    <li><a href="edit_countdown.php?id=<?php echo base64_encode(1); ?>">Count Down Timer</a></li>
					 <li><a href="update_banner.php">Change Banner</a></li>
					<li><a href="update_logo.php">Change Logo</a></li>
                    
                </ul>
            </div>