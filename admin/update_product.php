<?php
if(isset($_POST['submit_product'])){
include_once('db.php');
$code=$_POST['product_code'];

$category_code= $_POST['category_code'];
$subcategory_code= $_POST['subcategory_code'];
$product_number= $_POST['product_number'];
$product_name= $_POST['product_name'];
$product_details= $_POST['product_details'];
$product_price= $_POST['product_price'];
$product_status= $_POST['product_status'];
$product_image= $_POST['product_image'];


if(isset($_FILES['productimage'])){
      
      $file_name = $_FILES['productimage']['name'];
     
        move_uploaded_file($_FILES['productimage']['tmp_name'],"../images/product/".$product_image);
      
   }

  $sql = "UPDATE `products` SET `product_no` = '$product_number', `product_name` = '$product_name', `product_image` = '$product_image', 
  `product_details` = '$product_details', `product_price` = '$product_price', `product_status` = '$product_status' WHERE `products`.`product_code` ='$code'";
$result=mysqli_query($conn,$sql);
echo "<script>alert('Data updation successfull!'); window.location.href='view_product.php';</script>";


}
?>