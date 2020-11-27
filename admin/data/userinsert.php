<?php
session_start();
include "config.php";

$fullname = $_POST['cfname'];
$username = $_POST['cuname'];
$pwd = md5($_POST['cupwd']);
    

if(isset($_POST)){
    if($fullname != "" && $username != "" && $pwd != ""){
        $sql = "INSERT INTO admin_user (FullName,UserName,Password) values('{$fullname}','{$username}','{$pwd}')";
        if(mysqli_query($conn,$sql)){
            $_SESSION['username'] = $username;
            echo "<script>alert('User Created !'); location.href = '../Home.php';</script>";
            
        }else{
            echo "<script>alert('Something Went Wrong !'); location.href = '../';</script>";
        }
    }else{
        echo "<script>alert('Fill All The Field !'); location.href = '../';</script>";
    }   
}
?>