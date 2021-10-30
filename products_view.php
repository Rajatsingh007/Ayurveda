
	<?php require_once('db.php');
    include_once('topheader.php');
    include_once('header.php');
    $subcategory_code=$_GET['subcategory_code'];
    ?>
    <div class="content-top">
		<h2>Latest Products</h2>
            	<div class="grid-in">  
   <?php

         $sql=mysqli_query($conn,"select * from products where subcategory_code='$subcategory_code'"); 
         $num=mysqli_num_rows($sql);
         if($num>=1){
         while($row=mysqli_fetch_array($sql)){
    
?>
		<div class="col-md-3 men">
			<a href="product_details.php?product_code=<?php echo $row['product_code']; ?>&subcategory_code=<?php echo $row['subcategory_code']; ?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/product/<?php echo $row['product_image']; ?>"  width="300" alt=""/>
				<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in   b-delay03 ">
										<span><?php echo $row['product_name']; ?></span>	
									</h3>
								</div>
			</a>
			
				<div class="clearfix"> </div>
		
			
			</div>
 <?php };
 }else{echo "There is no related products";}
 ?>
 
		</div>
        </div>