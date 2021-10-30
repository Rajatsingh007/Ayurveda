<?php
 include_once('db.php');

?>
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>Products Sub Category</h1>
		<div class="grid-in">
        
   <?php
         $sql2=mysqli_query($conn,"SELECT * FROM `subcategory` ORDER BY id ASC LIMIT 0,7");
         while($row2=mysqli_fetch_array($sql2)){
    
?>
			<div class="col-md-3 grid-top" style="margin-bottom:3em;">
				<a href="products_view.php?subcategory_code=<?php echo $row2['subcategory_code']; ?>" 
				class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/subcategory/<?php echo $row2['file']; ?>"  width=""/>
							<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span><?php echo $row2['subcategory_name']; ?></span>	
									</h3>
								</div>
				</a>
		

			<p><a href="single.html"><?php echo $row2['subcategory_name']; ?></a></p>
			</div>
            
            <?php
	 };
  
?>
            
            
		
					<div class="clearfix"> </div>
		</div>
	</div>
	<!----->
	
	<div class="content-top-bottom">
		<h2>Latest Products</h2>
              
   <?php
         $sql=mysqli_query($conn,"select * from products order by product_id desc limit 0,4");
         while($row=mysqli_fetch_array($sql)){
    
?>
		<div class="col-md-3 men">
			<a href="product_details.php?product_code=<?php echo $row['product_code']; ?>&subcategory_code=<?php echo $row['subcategory_code']; ?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/product/<?php echo $row['product_image']; ?>"  width="200" height="200px"alt=""/>
				<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in   b-delay03 ">
										<span><?php echo $row['product_name']; ?></span>	
									</h3>
								</div>
								<h3><?php echo $row['product_name']; ?></h3>
								<h3>MRP-<?php echo $row['product_price']; ?>Rs</h3>
			</a>
			
			
		
				<div class="clearfix"> </div>
			</div>
                      
            <?php
	 };
  
?>

		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
	<!---->
	<div class="content-bottom">
		<ul>
			<li><a href="#"><img class="img-responsive" src="images/lo.png" alt=""/></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo1.png" alt=""/></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo2.png" alt=""/></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo3.png" alt=""/></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo4.png" alt=""/></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo5.png" alt=""/></a></li>
		<div class="clearfix"> </div>
		</ul>
	</div>
</div>
