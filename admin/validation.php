<?php  
session_start();

 $email = $_POST['mail'];
 $pass = $_POST['pass'];

include_once('db.php');

$sql = "select * From login where email = '$email' and password = '$pass' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if($row['email'] == $email && $row['password'] == $pass)
{
 $_SESSION['emailid'] = $email;
header('location:dashboard.php');
 

}
else{
    echo "<script> alert('please enter a valid email or password')</script>";
    
}
 
?>

