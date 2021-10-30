<?php

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'ayurved');
if(!$conn){
    die (mysqli_connect_errno("connection error"));
}


?>