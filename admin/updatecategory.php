<?php
if(isset($_POST[@submit])){
include_once('db.php');

 $category = $_POST['category'];
 $status = $_POST['status']; 
 $code = $_POST['code']; 
 $image = $_POST['file'];


if(isset($_FILES['image'])){
      
   $file_name = $_FILES['image']['name'];
    
        move_uploaded_file($_FILES['image']['tmp_name'],"../images/category/".$image);
      
   }


$sql = "UPDATE `category` SET name = '$category', `status` = '$status', `file` = '$image' WHERE code ='$code'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record updated successfully');window.location.href = 'viewcategory.php';</script>";
} else {
   echo "<script>alert('Record is not updated successfully');</script>";
}

 }  
   

?>