<?php 
include_once('db.php');
include_once('topheader.php');
include_once('header.php');
$product_code=@$_GET['product_code'];
 $subcategory_code=@$_GET['subcategory_code'];

?>
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">Categories</h3>
					</div>
		 <ul class="menu">
         <?php 
          $sql3=mysqli_query($conn,"select * from category");
         while($row3=mysqli_fetch_array($sql3)){
    
          ?>
		<li class="item1"><a href="#"><?php echo $row3['name'];?> </a>
			<ul class="cute">
              <?php 
              
           
          $sql2=mysqli_query($conn,"select * from subcategory where category_code='$row3[code]'");
         while($row2=mysqli_fetch_array($sql2)){
            ?>
				<li class="subitem1"><a href="products_view.php?subcategory_code=<?php echo $row2['subcategory_code']; ?>"><?php echo $row2['subcategory_name'];?> </a></li>
			<?php };?>   
			</ul>
		</li>
	<?php };?>
				
		</ul>
				</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	
				<div class="sellers">
				<div class="of-left-in">
				<h3 class="tag">Latest Products</h3>
                </div>
		<div class="tags">
		<ul>
                                               
   <?php
         $sql=mysqli_query($conn,"SELECT * FROM `products` ORDER BY `product_image`  DESC limit 1,4");
         while($row=mysqli_fetch_array($sql)){
    ?>
									
      	<li><a href="product_details.php?product_code=<?php echo $row['product_code']; ?>&subcategory_code=<?php echo $row['subcategory_code']; ?>"><img class="img-responsive" src="images/product/<?php echo $row['product_image']; ?>"  width="400" alt=""/></a></li><li style="font-size: 20px;color: blue;"><?php echo $row['product_name']; ?>	</li>								
		<div class="clearfix"> </div>
        <?php };?>
			</ul>
								
	</div>
								
	</div>
			

				</div>
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">	
			<div class="flexslider">
            
  <ul class="slides">
  <?php
  $sql=mysqli_query($conn,"SELECT * FROM `products` WHERE product_code='$product_code'");
$row=mysqli_fetch_array($sql);
?>
    <li data-thumb="images/si.jpg">
      <img class="img-responsive" src="images/product/<?php echo $row['product_image']; ?>" />
    </li>
  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
					</div>	
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4><?php echo $row['product_name']; ?></h4>
							<div class="star-on">
								<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
								<div class="review">
									<a href="#"> 1 customer review </a>
									
								</div>
							<div class="clearfix"> </div>
							</div>
							
							<h5 class="item_price"><img src="images/rs.jpg" width="50px"/>&nbsp;<?php echo $row['product_price']; ?></h5>
							<p><?php echo $row['product_details']; ?> </p>
						
							<ul class="tag-men">
								<li><span>Product&nbsp;&nbsp;&nbsp;Status</span>
								<span class="women1">: <?php  if($row['product_status']==1){echo "<p style=color:green>In Stock</p>";}else { echo "<p style=color:red>Out Of Stock</p>";} ?></span></li>
								
							</ul>
							
							
						</div>
					</div>
				<div class="clearfix"> </div>

				
		<div class=" bottom-product" style="margin-top: 30px;">
				
                                 
   <?php
   
         $sql5=mysqli_query($conn,"select * from products where subcategory_code='$subcategory_code' order by product_id desc limit 0,8");
         while($row5=mysqli_fetch_array($sql5)){
    
?>
						<div class="col-md-3 bottom-cd simpleCart_shelfItem"> 
                    	<div class="product-at ">
							<a href="product_details.php?product_code=<?php echo $row5['product_code']; ?>&subcategory_code=<?php echo $row5['subcategory_code']; ?>"><img class="img-responsive" src="images/product/<?php echo $row5['product_image']; ?>" alt="">
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>	
						</div>
						<p class="tun">It is a long established fact that a reader</p>
						<a href="#" class="item_add"><p class="number item_price"><i> </i></p><?php echo $row5['product_name']; ?></a>
                        						
					</div>
				
	<?php };?>
					<div class="clearfix"> </div>
				</div>
</div>

		<div class="clearfix"> </div>
		</div>
		</div>
<?php include_once('footer.php');?>