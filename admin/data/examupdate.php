<?php

include "config.php";

session_start();

if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}

$ecode = $_POST['ECODE'];
$examimg = $_POST['EIMG']; 

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



   
$Etitle = mysqli_real_escape_string($conn,$_POST['Etitle']);
$Ecate = mysqli_real_escape_string($conn,$_POST['Ecate']);
$Etm = mysqli_real_escape_string($conn,$_POST['Etime']);
$EA = mysqli_real_escape_string($conn,$_POST['Eauth']);
$EC = mysqli_real_escape_string($conn,md5($_POST['Etitle']));

$sql = "UPDATE tbl_exam set title='{$Etitle}',category='{$Ecate}',total_m={$Etm},author='{$EA}',e_image='{$EC}{$file_name}',ExamCode='{$EC}',e_status='Active' WHERE ExamCode='{$ecode}'";
if(mysqli_query($conn,$sql)){
    if($_FILES['Eimg']['name'] != ""){
    move_uploaded_file($file_tmp, '../upload/'.$EC.$file_name);
    unlink('../upload/'. $examimg);
    }
    echo 1;
}else{
    echo "Something Went Wrong !";
}


mysqli_close($conn);

?>