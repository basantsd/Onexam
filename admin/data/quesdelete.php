<?php

include "config.php";

session_start();

if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}

$ques_id = $_POST['qid'];
$examc = $_POST['ecode'];

$sql = "DELETE FROM tbl_ques WHERE Qid={$ques_id} AND examid='{$examc}';";
$sql .= "UPDATE tbl_exam set total_q=total_q-1 WHERE ExamCode='{$examc}';";
$sql .= "UPDATE tbl_ques set Qid=Qid-1 WHERE examid='{$examc}' AND Qid > {$ques_id}";

if(mysqli_multi_query($conn,$sql)){
    echo "Data Deleted Successfully.";
}else{
    echo "You can delete only last question if you want to delete this one change this question with last question .";
}

mysqli_close($conn);

?>