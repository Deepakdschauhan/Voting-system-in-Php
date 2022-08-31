<?php
$conn = mysqli_connect("localhost" , "root", "", "task");

if($conn){
    echo "connection successfull<br>";
}else{
    echo "not connect";
}
?>