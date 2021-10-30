<?php
if(isset($_POST['submit'])){
include_once('db.php');

 $category = $_POST['subcategory'];
 $status = $_POST['status'];
 $code = $_POST['subcategory_code'];
 $image= $_POST['file'];

if(isset($_FILES['image'])){
      $errors= array();
      
$file_name = $_FILES['image']['name'];
    
        move_uploaded_file($_FILES['image']['tmp_name'],"../images/subcategory/".$image);
      
   }


 $sql = "UPDATE `subcategory` SET subcategory_name = '$category', `status` = '$status', `file` = '$image' WHERE subcategory_code ='$code'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record updated successfully'); window.location.href = 'view_subcategory.php';</script>";
} else {
    echo "<script>alert('Record is not updated successfully');</script>";
}

 }  
   

?>