<?php require('db.php');

?><div class="header">
	
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="home.php"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue"><li class="showhide" style="display: list-item;"><span class="title">MENU</span><span class="icon1"></span><span class="icon2"></span></li>
					  <li class="active grid" style="display: none;"><a class="color8" href="home.php">Home</a></li>	
				     
		   		 <li class="grid" style="display: none;"><a class="color2" href="#">Products</a>
					  	<div class="mepanel">
						<div class="row">
                        
                        <?php

         $sql=mysqli_query($conn,"select * from category order by id desc limit 0,5"); 
         while($row=mysqli_fetch_array($sql)){
                                    ?> 
							<div class="col1">
								<div class="h_nav">
                                <h4><a href="home.php?category_code=<?php echo $row['code'];?>"><?php $x=$row['name']; if(strlen($x)>=15){echo substr ($x, 10, 10).'...'; } else echo $x; ?></a></h4>
									<ul>
                                      <?php 

         $sql2=mysqli_query($conn,"select * from subcategory where category_code='$row[code]' order by id desc limit 0,10"); 
         while($row2=mysqli_fetch_array($sql2)){
                                    ?>
										<li><a href="products_view.php"><?php echo $row2['subcategory_name']; ?> </a></li>
                                        <?php }?>
										</ul>	
								</div>							
							</div>
						<?php }?>
						
						  </div>
						</div>
			    </li>
				<li style="display: none;"><a class="color4" href="#about.html	">About Us</a></li>				
				<li style="display: none;"><a class="color6" href="#contact.html">Contact</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>