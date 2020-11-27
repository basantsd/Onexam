<?php
include "config.php";

session_start();

if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}

if(isset($_SESSION['username'])){
$sql = "SELECT * from tbl_exam WHERE Auth_user='{$user}'";
}else{
    $sql = "SELECT * from tbl_exam";
}

$res = mysqli_query($conn,$sql);

$output ="";
$i = 1;
if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        $output .= "<tr>
        <td>$i</td>
        <td>{$row['title']}</td>
        <td>{$row['category']}</td>
        <td><a id='Exam_questionadd' class='btn btn-success' href='./showquestion.php?Exam={$row['ExamCode']}'>{$row['total_q']}</a></td>
        <td>{$row['total_m']} min</td>
        <td>{$row['author']}</td>
        <td>{$row['e_status']}</td>
        <td><a id='Exam_questionadd' class='btn btn-success' href='./insertques.php?Exam={$row['ExamCode']}'>Add Ques</a></td>
        <td><a id='Exam_edit' data-id='{$row['ExamCode']}'><i class='fa fa-edit'></i></a></td>
        <td><a id='Exam_delete' data-img='{$row['e_image']}' data-id='{$row['ExamCode']}'><i class='fa fa-trash'></i></a></td>
    </tr>";
    $i++;
    }
    echo $output;
}
else{
    echo "<h1>No Data Find !</h1>";
}

mysqli_close($conn);

?>

