<?php

include "config.php";

session_start();

if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}

if(isset($_FILES['Eimg']['name'])){
    $error = array();

        $file_name = $_FILES['Eimg']['name'];
        $file_size = $_FILES['Eimg']['size'];
        $file_tmp = $_FILES['Eimg']['tmp_name'];
        $file_type = $_FILES['Eimg']['type'];
        $file_ext0 = explode('.',$file_name);
        $file_ext = end($file_ext0);

        $extension = array("jpeg","jpg","png");

        if(in_array($file_ext,$extension)=== false){
            $error[] = "Upload JPG JPEG and PNG only";
        }
        if($file_size > 2097152){
            $error[] = "File size must be 2mb or lower";
        }

}



if(isset($_POST['Etitle']) && isset($_POST['Ecate']) && isset($_POST['Etime']) && isset($_POST['Eauth'])){
    
    $Etitle = mysqli_real_escape_string($conn,$_POST['Etitle']);
    $Ecate = mysqli_real_escape_string($conn,$_POST['Ecate']);
    $Etm = mysqli_real_escape_string($conn,$_POST['Etime']);
    $EA = mysqli_real_escape_string($conn,$_POST['Eauth']);
    $Auser = mysqli_real_escape_string($conn,$_POST['Auser']);
    $EC = mysqli_real_escape_string($conn,md5($_POST['Etitle']));

    $sql = "INSERT INTO tbl_exam(title,category,total_q,total_m,author,Auth_user,e_image,ExamCode,e_status) values('{$Etitle}','{$Ecate}',0,{$Etm},'{$EA}','{$Auser}','{$EC}{$file_name}','{$EC}','Active')";
    if(mysqli_query($conn,$sql)){
        move_uploaded_file($file_tmp, '../upload/'.$EC.$file_name);
        echo 1;
    }else{
        echo "Something Went Wrong !";
    }
}
else{
    echo  "Fill All Field !!";
}

mysqli_close($conn);

?>