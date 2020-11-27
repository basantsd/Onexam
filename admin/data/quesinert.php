<?php

include "config.php";

session_start();

if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}




$quesname = mysqli_real_escape_string($conn,$_POST['Exam_q']);
$examcode = mysqli_real_escape_string($conn,$_POST['Eques']);
$ansone = mysqli_real_escape_string($conn,$_POST['Ans1']);
$anstwo = mysqli_real_escape_string($conn,$_POST['Ans2']);
$ansthree = mysqli_real_escape_string($conn,$_POST['Ans3']);
$ansfour = mysqli_real_escape_string($conn,$_POST['Ans4']);
$currans = mysqli_real_escape_string($conn,$_POST['AnsC']);

$sqlQid = "SELECT MAX(Qid) AS max from tbl_ques WHERE examid='{$examcode}'";

$resQid = mysqli_query($conn,$sqlQid);

$rowQid = mysqli_fetch_array( $resQid );
$numq  = $rowQid['max'];

if($numq>0){
    $qnum = $numq+1;
}else{
    $qnum = 1;
}


if($quesname != "" && $examcode != "" && $ansone != "" && $anstwo != "" && $ansthree != "" && $ansfour != ""){
    $sql = "INSERT INTO tbl_ques (fullques,examid,ans_one,ans_two,ans_three,ans_four,c_ans,Qid) VALUES('{$quesname}','{$examcode}','{$ansone}','{$anstwo}','{$ansthree}','{$ansfour}','{$currans}',{$qnum});";
    $sql .= "UPDATE tbl_exam set total_q=total_q+1 where ExamCode='{$examcode}'";

    if(mysqli_multi_query($conn,$sql)){
        echo "Question Submitted.";
    }else{
        echo "Something Wrong.";
    }
}else{
    echo "Fill All Field.";
}


?>