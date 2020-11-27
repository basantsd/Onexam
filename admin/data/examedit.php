<?php

include "config.php";

session_start();

if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}

$coucode = $_POST["ccode"];

$sql = "SELECT * from tbl_exam where ExamCode='{$coucode}'" or die("Query Failed !");
$res = mysqli_query($conn,$sql);
$output = "";
if(mysqli_num_rows($res)){
    while($row = mysqli_fetch_assoc($res)){
        $output .= "<div class='form-group'>
        <label for=''>Exam Title</label>
        <input type='text' class='form-control' value='{$row['title']}' name='Etitle' id='Etitle' aria-describedby='helpId' placeholder=''>
      </div>
      <div class='form-group'>
        <label for=''>Sub Title / Category</label>
        <input type='text' class='form-control' value='{$row['category']}' name='Ecate' id='Ecate' aria-describedby='helpId' placeholder=''>
      </div>
     
      <div class='form-group'>
        <label for=''>Exam Timing (1min to 10min)</label>
        <input type='number' min='1' max='10' class='form-control' value='{$row['total_m']}' name='Etime' id='Etime' aria-describedby='helpId' placeholder=''>
      </div>
      <div class='form-group'>
        <label for=''>Exam Auther</label>
        <input type='text' class='form-control' value='{$row['author']}' name='Eauth' id='Eauth' aria-describedby='helpId' placeholder=''>
      </div>
      
      <input type='text' class='form-control' value='{$row['ExamCode']}' name='ECODE' id='ECODE' hidden aria-describedby='helpId' placeholder=''>
      <input type='text' class='form-control' value='{$row['e_image']}' name='EIMG' id='EIMG' hidden aria-describedby='helpId' placeholder=''>
      <div class='form-group'>
          <label for='my-input'>Exam Image</label>
          <input id='Eimg' class='form-control-file' type='file' name='Eimg'>
          <span class='help-block'>Allow only jpeg, jpg and png format Images</span>
        </div>
        
      <input id='editexam' readonly class='btn btn-primary' type='submit' value='Submit'>";
    }
    echo $output;
}else{
    echo $output .="Something went wrong!";
}

?>