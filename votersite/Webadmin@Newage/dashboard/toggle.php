								<?php 
								
								$toggle_on='<i class="fa fa-toggle-on"></i>';
								$toggle_off='<i class="fa fa-toggle-off"></i>';
								if($hide==1)
								{$new_star=0;}else{$new_star=1;} ?>
                               <span class="action-icons" title="Publish"><a href="toggle_hide.php?id=<?php echo base64_encode($id); ?>&pg=<?php echo base64_encode($page); ?>&ns=<?php echo base64_encode($new_star); ?>"><?php if($hide==0){echo $toggle_on;}else{echo $toggle_off;}?></a></span>
















