<?php

include "config.php";

session_start();

if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}

$quid = $_POST['quesID'];
$qfull = $_POST['Exam_q'];
$qan1 = $_POST['Ans1'];
$qan2 = $_POST['Ans2'];
$qan3 = $_POST['Ans3'];
$qan4 = $_POST['Ans4'];
$cans = $_POST['AnsC'];


$sql = "UPDATE tbl_ques set fullques='{$qfull}',ans_one='{$qan1}',ans_two='{$qan2}',ans_three='{$qan3}',ans_four='{$qan4}',c_ans='{$cans}' WHERE ques_id={$quid}";
if(mysqli_query($conn,$sql)){
    echo "Question Updated.";
}else{
    echo "Somethig Wrong.";
}

?>