								<?php 
								$filled_star='<i class="fa fa-star"></i>';
								$transparent_star='<i class="fa fa-star transparent-icon"></i>';
								if($star==1)
								{$new_star=0;}else{$new_star=1;} ?>
                                <td><span class="action-icons"><a href="starring.php?id=<?php echo base64_encode($id); ?>&cp=<?php echo base64_encode($thispage); ?>&pg=<?php echo base64_encode($page); ?>&ns=<?php echo base64_encode($new_star); ?>&action=<?php echo base64_encode($action); ?>&searchname=<?php echo base64_encode($searchname);?>"><?php if($star==1){echo $filled_star;}else{echo $transparent_star;}?></a></span></td>
















