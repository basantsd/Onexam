<?php
include "config.php";

$questionid = $_POST['qid'];

session_start();

if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}

$sql = "SELECT * from tbl_ques where ques_id={$questionid}";
$res = mysqli_query($conn,$sql);
$output = "";
if(mysqli_num_rows($res)){
    while($row =mysqli_fetch_assoc($res)){
        $output .= "<div class='form-group'>
        <label for=''>Exam Question</label>
        <textarea type='text' class='form-control' name='Exam_q' id='Exam_q' aria-describedby='helpId' row='3'>{$row['fullques']}</textarea>
      </div>
      <div class='form-group'>
        <label for=''>Answer 1</label>
        <input type='text' class='form-control' name='Ans1' id='Ans1' value='{$row['ans_one']}' aria-describedby='helpId'>
        <input type='text' class='form-control' hidden name='quesID' id='quesID' value='{$row['ques_id']}' aria-describedby='helpId'>
        </div>
      <div class='form-group'>
        <label for=''>Answer 2</label>
        <input type='text' class='form-control' name='Ans2' id='Ans2' value='{$row['ans_two']}' aria-describedby='helpId'>
      </div>
      <div class='form-group'>
        <label for=''>Answer 3</label>
        <input type='text' class='form-control' name='Ans3' id='Ans3' value='{$row['ans_three']}' aria-describedby='helpId'>
      </div>
      <div class='form-group'>
        <label for=''>Answer 4</label>
        <input type='text' class='form-control' name='Ans4' id='Ans4' value='{$row['ans_four']}' aria-describedby='helpId'>
      </div>
      <div class='form-group'>
      <label for=''>Right Answer</label>
      <input type='text' class='form-control' name='AnsC' id='AnsC' value='{$row['c_ans']}' aria-describedby='helpId'>
    </div>
      <input readonly name='QuesUpdate' type='submit' class='btn btn-primary' value='Submit'>";
    }
    echo $output;
}else{
    echo "Somthing Wrong .";
}


?>