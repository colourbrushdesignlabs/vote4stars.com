

<script src="js/security.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-40ZQ3XNT64"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-40ZQ3XNT64');
</script>

<?php  include("hitcounter.php"); 

include("pg_security/security.php");


?>




<ul id="main-nav" class="list-unstyled main-navigation">

                                <li class="menu-item"><a href="index.php">Home</a>

                                </li>

                                

                               <?php 

                               

                $qry4 = "SELECT id,event_name,hide FROM event where current_status='ACTIVE'" ;

                $result4=$conn->query($qry4);

				if ($result4->num_rows== 1) 

				{

    

                while($row4 = $result4->fetch_assoc()) 

				{

			

             		 $ev_name=$row4['event_name'];

					$_SESSION['id_event']=$row4['id'];

					$_SESSION['hide_event']=$hide=$row4['hide'];

               }

				

					if($hide!=1)

					{

						

						echo "<li class='menu-item'><a href='show_event.php'>".$ev_name."</a></li>";

					}

					

				}

				

                            ?>    

                              

                                

                               <!-- <li class="menu-item"><a href="gallery.php">Gallery</a> -->

                                </li>

                               

                                <?php 

                               

                $qry5 = "SELECT hide,menu FROM dynamic_contents where id='6'" ;

                $result5=$conn->query($qry5);

				if ($result5->num_rows== 1) 

				{

    

                while($row5 = $result5->fetch_assoc()) 

				{

			

             		 $caption=$row5['menu'];

					 $hide1=$row5['hide'];

               }

				

					if($hide1!=1)

					{

						

						echo "<li class='menu-item'><a href='content.php?cid=".base64_encode(6)."'".">".$caption."</a></li>";

					}

					

				}

				

                            ?>    

                              

                               

								 <!--<li class="menu-item"><a href="index.php">

                                 Subscribe

                                </a>-->

                                </li>

								<li class="menu-item"><a href="content.php?cid=<?php echo base64_encode(5); ?>">About Us</a>

                                </li>

								</li>

								<li class="menu-item"><a href="content.php?cid=<?php echo base64_encode(8); ?>">Contact Us</a>

                                </li>

                            </ul>
