<?php

include "config.php";
session_start();
$username = $_POST['luname'];
$upwd = md5($_POST['lupwd']);

$sql1 = "SELECT UserName FROM admin_user WHERE UserName='{$username}'";
$res = mysqli_query($conn,$sql1);
if(mysqli_num_rows($res)===1){
    if($username === "JAS@321" && $upwd === md5("adminJAS")){
    header("Location: ../Home.php");  
    $_SESSION['admin'] = $username;
    }else{
        header("Location: ../Home.php");
        $_SESSION['username'] = $username;
    }
}else{
    
    echo "<script>alert('No User Find !')</script>";
    header("Location: ../");
    
}
?>