<?php
include_once('header.php');
include_once('db.php');
$code= @$_GET["code"];

 $sql = mysqli_query($conn,"select * from category where code='$code'");
 $row = mysqli_fetch_assoc($sql); 
   

?>
<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 411px;">
       <div class="content-main">

		<!--content-->
		<div class="content-top">
			
			<div class="grid-form col-md-8">
            
            
            <div class="grid-form1 ">
 		<h3 id="forms-example" class="">Edit Category Form</h3>
 		<form action="updatecategory.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Category</label>
    <input type="hidden"  name="code" value="<?php echo $row['code'];?>" />
    <input type="text"  name="file" value="<?php echo $row['file'];?>" />
    
    <input type="text" class="form-control" name="category"  value="<?php echo $row['name'];?>"  placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">File Upload</label>
    <input type="file" class="form-control"  name="image"/>
  </div>
  
  <div class="form-group">
   <label for="category">Status:</label>
   <select class="form-control" name="status" > 
   <option value='1' ><?php if($row['status']==1){ echo 'active';}else{echo 'disabled' ;}?></option>
   <option  value="1" >active</option>
   <option  value="0" >disabled</option>
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
