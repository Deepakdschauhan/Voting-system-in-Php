<?php
include "config.php";
session_start();
if(isset($_POST['name']) && $_POST['age'] && $_POST['password']){
    $name = stripcslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($conn, $name);
    $age = stripcslashes($_REQUEST['age']);
    $age = mysqli_real_escape_string($conn, $age);
    $password = stripcslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM `info` WHERE name='$name' AND age='$age' AND password='$password'";

    $result = mysqli_query($conn, $query);
    $rows= mysqli_num_rows($result);
    if($rows == 1){
        $_SESSION['name'] = $name;
        $_SESSION['age'] = $age;
        $_SESSION['password'] = $password;
        //redirect page
        header("location: dashboard.php");
    }else{
        echo "login failed";
    }
}else{
    echo "all coding failed";
} 
?>