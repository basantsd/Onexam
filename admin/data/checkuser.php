<?php


include "config.php";

$username = $_POST['user'];
    
$sql1 = "SELECT UserName FROM admin_user WHERE UserName='{$username}'";
$res = mysqli_query($conn,$sql1);
if(mysqli_num_rows($res)===1){
    echo 1;
}else{
    echo 0;
}
?>