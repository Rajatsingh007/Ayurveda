<?php
include_once('header.php');
include_once('db.php');
$code= $_GET['code'];

$result3 = mysqli_query($conn,"select * from products where product_code='$code'");
$row3=mysqli_fetch_assoc($result3); 
   
?>
<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 411px;">
       <div class="content-main">

		<!--content-->
		<div class="content-top">
			<div class="grid-form col-md-8">
            
            
            <div class="grid-form1 ">
 		<h3 id="forms-example" class="">All Products</h3>
 		<form action="update_product.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Select Category Name:</label>
   
    <select class="form-control" name="category_code"> 
    <?php 
    $result1=mysqli_query($conn,"select * from category");

    while($row1 = $result1->fetch_array()){
   ?>
    <option value="<?php echo $row1['code'];?>"> <?php echo $row1['name'];?></option>
       
        
      <?php } ?>
    </select>  
  </div>
 
   <div class="form-group">
    <label for="exampleInputEmail1">Sub Category Name:</label>
    <select name="subcategory_code" class="form-control" >
     <?php 
    $result=mysqli_query($conn,"select * from subcategory");

    while($row = $result->fetch_array()){
   ?>
    <option value="<?php echo $row['subcategory_code'];?>"> <?php echo $row['subcategory_name'];?></option>
       
        
      <?php } ?>
      </select>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Product Number:</label>
    <input type="hidden" class="form-control" name="product_code"  value="<?php echo $row3['product_code'];?>">
    <input type="hidden" class="form-control" name="product_image"  value="<?php echo $row3['product_image'];?>">
    <input type="number" class="form-control" name="product_number"  value="<?php echo $row3['product_no'];?>">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Product Name:</label>
    <input type="text" class="form-control" name="product_name"  value="<?php echo $row3['product_name'];?>"/>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Product Image:</label>
    <input type="file" class="form-control"  name="productimage" />
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Enter Product details:</label>
    <textarea class="form-control" name="product_details" ><?php echo $row3['product_details'];?></textarea>\
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Product_Price:</label>
    <input type="number" class="form-control" name="product price"  value="<?php echo $row3['product_price'];?>"/>
  </div>
  
  <div class="form-group">
    <label for="category">Status:</label>
    <select class="form-control" name="product_status" > 
    <option value="<?php if($row3['product_status']==0){echo "0";}else{echo "1";}?>"><?php if($row3['product_status']==0){echo "disable";}else{echo "active";}?></option>
   <option value="1" >Active</option>
   <option  value="0" >disable</option>
  </select>
  </div>
  <button type="submit" name="submit_product" class="btn btn-success">Submit</button>
</form>
</div>
 </div>           
            
        </div>
		<div class="clearfix"> </div>
       </div>
     </div>    
<?php include_once('footer.php');?>  