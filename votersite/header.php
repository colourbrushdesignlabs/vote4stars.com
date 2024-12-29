<?php
$qry200="select * from `file_manager` where `id`='2'";
$result200=$conn->query($qry200);
							
							
							 if ($result200->num_rows>0) 
	
								{
    
								while($row200 = $result200->fetch_assoc()) 
								{
									$logofile=$row200['file_name'];
									$logotitle=$row200['titile'];
								}
							 }



$logo_path="Webadmin@Newage/dashboard/images/Logo/".$logofile;

?>
<header>
        <!-- top header -->
        <div class="top-header">
            <div class="top-headerWrap">
				<!--start-->
				<!--<div id="clockdate">
  <div class="clockdate-wrapper">
    <div id="clock"></div>
    <div id="date"></div>
  </div>
</div>-->
          <!--end-->      
                <div id="timer">
                    <div id="days"></div>
                    <div id="hours"></div>
                    <div id="minutes"></div>
                    <div id="seconds"></div>
                </div>
				<div class="left-hdrlogo"><img src="<?php echo $logo_path;?>" alt="LOGO"></div>
                <div class="social-icons">
					<?php
					
					$qry1 = "SELECT * FROM socialmedia where id=1" ;
                 $result1=$conn->query($qry1);
					if ($result1->num_rows > 0) {
    
                while($row1 = $result1->fetch_assoc()) 
				{
				
					$facebook="https://www.facebook.com/".$row1['facebook'];
					$instagram="https://www.instagram.com/".$row1['instagram'];
					$twitter="https://www.twitter.com/".$row1['twitter'];
					$youtube="https://www.youtube.com/".$row1['youtube'];
					$google="https://news.google.com/".$row1['google'];
					
               }
				}
					
					?>
					
					
                    <span>Follow us on:</span>
                    <ul>
                        <li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
						<li><a href="<?php echo $google; ?>" target="_blank"><i class="fa fa-google"></i></a></li>
                    </ul>
                     <div id="clockdate">
                        <div class="clockdate-wrapper">
                            <div id="date"></div>
                            <div id="clock"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bottom header -->
        <div class="header-bottom clearfix">
            <div class="container">
                <div class="nav-bar clearfix">
                    <!-- navigation -->
                    <div class="navigation">
                        <div class="toggle-btn">
                            <div class="nav-toggle-icon"><span></span></div>
                        </div>
                        <nav id="nav" class="menu-main-menu-container">
                            <?php include("menu.inc"); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- news scroll -->
	
		
           <?php
				$qry = "SELECT * FROM scroll_news order by id asc" ;
                $result=$conn->query($qry);
				
				
				?>
        <div class="hdr-news-scroll">
            <span>Updates</span>
            <marquee>
		
			<?php
				
				if ($result->num_rows > 0) {
    
                while($row = $result->fetch_assoc()) 
				{
				echo "&diams;  ";
              echo $row['news'];
				echo "&nbsp; &nbsp;";	
               }
				}
				
				?>
				
				
			</marquee>
        </div>
    </header>
