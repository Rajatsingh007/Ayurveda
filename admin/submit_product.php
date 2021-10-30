<?php 
include_once('db.php');
if(isset($_POST['submit_product'])){

$category_code= $_POST['category_code'];
$subcategory_code= $_POST['subcategory_code'];
$product_number= $_POST['product_number'];
$product_name= $_POST['product_name'];
$product_details= $_POST['product_details'];
$product_price= $_POST['product_price'];
 $product_status= $_POST['product_status'];

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

$product_code = random_num(4);

 if(isset($_FILES['product_image'])){
      $errors= array();
      
      $file_name = $_FILES['product_image']['name'];
     $file_code=$product_code."_".$file_name;
        move_uploaded_file($_FILES['product_image']['tmp_name'],"../images/product/".$file_code);
      
   }
  
$sql2 = mysqli_query($conn,"select * from products where product_name='$product_name'");
 
 $num = mysqli_num_rows($sql2);

 if($num>=1){
 
  echo "<script>alert('Data already inserted into database');  window.location='product.php';</script>";

} 
else{
      $sql = "insert into products(category_code,subcategory_code,product_code,product_no,product_name,product_image,product_details,product_price,product_status) values ('$category_code','$subcategory_code','$product_code','$product_number','$product_name','$file_code','$product_details','$product_price','$product_status')";

$result = mysqli_query($conn,$sql);
       echo "<script>alert('Data inserted successfully'); window.location='view_product.php';</script>";

}
}
?>