<?php

include "config.php";

session_start();

if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}

$ecode= $_GET['examcode'];

$sql = "SELECT * from tbl_ques WHERE examid='{$ecode}'";
$res = mysqli_query($conn,$sql);

$output = "";
$i = 1;
if(mysqli_num_rows($res)){
    while($row = mysqli_fetch_assoc($res)){
        $output .="<tr>
        <td>$i</td>
        <td>{$row['fullques']}</td>
        <td>{$row['ans_one']}</td>
        <td>{$row['ans_two']}</td>
        <td>{$row['ans_three']}</td>
        <td>{$row['ans_four']}</td>
        <td>{$row['c_ans']}</td>
        <td><a id='ques_edit'  data-id='{$row['ques_id']}'><i class='fa fa-edit'></i></a></td>
        <td><a id='ques_delete' data-ecode='$ecode' data-id='{$row['Qid']}'><i class='fa fa-trash'></i></a></td>
    </tr>";
    $i++;
    }
    echo $output;
}else{
    echo "<h1>No Data Found !</h1>";
}


?>