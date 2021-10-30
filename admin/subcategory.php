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
 		<h3 id="forms-example" class="">Sub Category Form</h3>
 		<form action="submit_subcategory.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Category:</label>
   
    <select class="form-control" name="category"> 
    <option>select category</option>
    <?php 
    $result1=mysqli_query($conn,"select * from category");

    while($row1 = $result1->fetch_array()){
   ?>
    <option value="<?php echo $row1['code'];?>"> <?php echo $row1['name'];?></option>
       
        
      <?php } ?>
    </select>  
  </div>
 
   <div class="form-group">
    <label for="exampleInputEmail1">Sub Category:</label>
    <input type="text" class="form-control" name="subcategory"  placeholder="Enter Sub Category name">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">File Upload</label>
    <input type="file" class="form-control"  name="image" >
  </div>
  
  <div class="form-group">
    <label for="category">Status:</label>
    <select class="form-control" name="status" > 
   <option value="1" >Active</option>
   <option  value="0" >InActive</option>
  </select>
  </div>
  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
</div>
 </div>           
            
        </div>
		<div class="clearfix"> </div>
       </div>
     </div>    



<?php include_once('footer.php');?>