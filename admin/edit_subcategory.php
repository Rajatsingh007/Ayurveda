<?php
include_once('header.php');
include_once('db.php');
$code= $_GET['code'];
$sql="select * from subcategory where subcategory_code='$code'";
$result = mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($result); 
   
?>

<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 411px;">
       <div class="content-main">

		<!--content-->
		<div class="content-top">
			
			<div class="grid-form col-md-8">
            
            
            <div class="grid-form1 ">
 		<h3 id="forms-example" class="">Edit Sub Category Form</h3>
 		<form action="update_subcategory.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
         <div class="form-group">
         <input type="hidden" name="subcategory_code" class="form-control" value="<?php echo $row['subcategory_code']; ?>"/>
         <input type="hidden" name="file" class="form-control" value="<?php echo $row['file']; ?>"/>
    <label for="exampleInputEmail1">Sub Category:</label>
    <input type="text" class="form-control" name="subcategory" value="<?php echo $row['subcategory_name']; ?>" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">File Upload</label>
    <input type="file" class="form-control"  name="image"/>
  </div>
  
  <div class="form-group">
    <label for="category">Status:</label>
    <select class="form-control" name="status" > 
   <option value="<?php if($row['status']==1){ echo '1';}else{echo '0' ;}?>" ><?php if($row['status']==1){ echo 'active';}else{echo 'disable' ;}?></option>
   <option  value="1" >active</option>
   <option  value="0" >disable</option>
  </select>
  </div>
  <input type="submit" name="submit" class="btn btn-success" value="submit"/>
</form>
</div>
 </div>           
            
        </div>
		<div class="clearfix"> </div>
       </div>
     </div>    
<?php include_once('footer.php');?>   

