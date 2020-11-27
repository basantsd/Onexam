<?php

include "config.php";

$userid = $_POST['uid'];

session_start();

if(!isset($_SESSION['admin'])){
    header("Location: ./");
}

$sql = "DELETE from admin_user WHERE admin_id={$userid}";
if(mysqli_query($conn, $sql)){
 echo 1;
}else{
    echo 0;
}

?>