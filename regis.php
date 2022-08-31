<?php
require('config.php');
if(isset($_REQUEST['name'])){
    $name = stripcslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($conn, $name);
    $age = stripcslashes($_REQUEST['age']);
    $age = mysqli_real_escape_string($conn, $age);
    $fname = stripcslashes($_REQUEST['fname']);
    $fname = mysqli_real_escape_string($conn, $fname);
    $email = stripcslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $mobile = stripcslashes($_REQUEST['mobile']);
    $mobile = mysqli_real_escape_string($conn, $mobile);
    $address = stripcslashes($_REQUEST['address']);
    $address = mysqli_real_escape_string($conn, $address);
    $password = stripcslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    
    $query = "INSERT INTO `info`(`id`, `name`, `age`, `fname`, `email`, `mobile`, `address`, `password`) VALUES ('[]','$name','$age','$fname','$email','$mobile','$address','$password')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "registration successfull";
        header("location: login.html");
    }else{
        echo "not registered";
    }   
}
?>