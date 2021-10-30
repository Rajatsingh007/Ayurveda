<?php

include_once('db.php');
$Id= $_GET["code"];

echo $sql="delete from products where product_code='$Id' ";
$result=mysqli_query($conn,$sql);
if($result){
    
    echo "<script>alert('Record has been Deleted'); window.location.href = 'view_product.php'; </script>";
}
?>