<?php
include_once('db.php');

if(isset($_POST['submit'])){
$subcategory_name=$_POST['subcategory'];
$category_code=$_POST['category'];
$status=$_POST['status'];

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

$subcategory_code = random_num(4);
if(isset($_FILES['image'])){
      $errors= array();
      
    $file_name = $_FILES['image']['name'];
    $file_code=$subcategory_code."_".$file_name;
        move_uploaded_file($_FILES['image']['tmp_name'],"../images/subcategory/".$file_code);
      
   }
$sql2 = mysqli_query($conn,"select * from subcategory where subcategory_name='$subcategory_name'");
 $result2=mysqli_fetch_array($sql2);

 $num=mysqli_num_rows($sql2);

 if($num<=0){
 $sql = "INSERT INTO `subcategory`(`subcategory_name`, `category_code`, `subcategory_code`, `status`,file) VALUES('$subcategory_name','$category_code','$subcategory_code','$status','$file_code')";

$result = mysqli_query($conn,$sql);
echo "<script>alert('Data inserted successfully'); window.location='view_subcategory.php';</script>";
} 
else{
   
     echo "<script>alert('Data already inserted into database'); window.location='view_subcategory.php';</script>";
}
}
 ?>