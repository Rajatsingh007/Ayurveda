<?php
include_once('header.php');
if(isset($_POST['submit']))
{

 $category = @$_POST['category'];
 $status = @$_POST['status']; 
$file = @$_POST['image']; 
 

include_once('db.php');

function random_num($size){
	$alpha_key = '';
	$keys = range('A', 'Z');

	for ($i = 0; $i < 2; $i++) {
		$alpha_key .= $keys[array_rand($keys)];
	}

	$length = $size - 2;

	$key = '';
	$keys = range(0, 9);

	for ($i = 0; $i < $length; $i++) {
		$key .= $keys[array_rand($keys)];
	}

	return $alpha_key . $key;
}

$code = random_num(4);

 if(isset($_FILES['image'])){
      $errors= array();
      
      $file_name = $_FILES['image']['name'];
      $file_code=$code."_".$file_name;
        move_uploaded_file($_FILES['image']['tmp_name'],"../images/category/".$file_code);
      
   }
  
$sql2 = mysqli_query($conn,"select * from category where name='$category'");
 $result2=mysqli_fetch_array($sql2);

 $num=mysqli_num_rows($sql2);

 if($num<=0){
 
    $sql = "insert into category (code,name,status,file) values ('$code','$category','$status','$file_code')";

$result = mysqli_query($conn,$sql);
echo "<script>alert('Data inserted successfully'); window.location='category.php';</script>";

 

} 
else{
   
     echo "<script>alert('Data already inserted into database');</script>";
}
}
?>
<div id="page-wrapper" class="gray-bg dashbard-1" style="min-height: 411px;">
       <div class="content-main">

		<!--content-->
		<div class="content-top">
			
			<div class="grid-form col-md-8">
            
            
            <div class="grid-form1 ">
 		<h3 id="forms-example" class="">Category Form</h3>
 		<form action="category.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Category</label>
    <input type="text" class="form-control" name="category"  placeholder="Enter Category name">
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