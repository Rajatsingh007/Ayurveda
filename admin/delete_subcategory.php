<?php

include_once('db.php');
$Id= $_GET["code"];

$sql="delete from subcategory where subcategory_code='$Id' ";
$result=mysqli_query($conn,$sql);
if($result){
    
    echo "<script>alert('Record has been Deleted'); window.location.href = 'view_subcategory.php'; </script>";
}
?>