<?php 
include_once('header.php');
include_once('db.php');
    
?>


<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 411px;">
       <div class="content-main">

		<!--content-->
		<div class="content-top">
			
			<div class="grid-form col-md-8">
            
            
            <div class="grid-form1 ">
 		<h3 id="forms-example" class="">All Products</h3>
 		<form action="submit_product.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Select Category Name:</label>
   
    <select class="form-control" name="category_code"> 
    <option>Select Category Name:</option>
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
    <option>Select Subcategory Name:</option>
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
    <input type="number" class="form-control" name="product_number"  placeholder="Enter number only!">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Product Name:</label>
    <input type="text" class="form-control" name="product_name"  placeholder="Enter Product_name name"/>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Product Image:</label>
    <input type="file" class="form-control"  name="product_image" />
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Enter Product details:</label>
    <textarea type="text" class="form-control" name="product_details"  placeholder="Enter details"></textarea>\
    
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Product_Price:</label>
    <input type="number" class="form-control" name="product price"  placeholder="Enter only number (INR)"/>
  </div>
  
  <div class="form-group">
    <label for="category">Status:</label>
    <select class="form-control" name="product_status" > 
   <option value="1" >Active</option>
   <option  value="0" >InActive</option>
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