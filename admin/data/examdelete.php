<?php

include "config.php";

session_start();

if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}
$ccode = $_POST["coucode"];
$examimg = $_POST["eimg"]; 




$sql = "DELETE from tbl_exam where ExamCode='{$ccode}';";
$sql .= "DELETE from tbl_ques where examid='{$ccode}'";


if(mysqli_multi_query($conn,$sql)){
    unlink('../upload/'. $examimg);
    echo 1;
}else{
    echo "Somthing went wrong.";
}

?>