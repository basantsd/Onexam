<?php

include "config.php";

session_start();

if(!isset($_SESSION['admin'])){
    header("Location: ./");
}

$sql = "SELECT * FROM contact";
$res = mysqli_query($conn,$sql) or die("Query Failed !");
$output= "";
$i= 1;
if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        $output .= "<tr>
        <td>{$i}</td>
        <td>{$row['name']}</td>
        <td>{$row['phoneno']}</td>
        <td>{$row['emailC']}</td>
        <td>{$row['message']}</td>
    </tr>";
    $i++;
    }
}
else{
    $output .="Sorry! No Data Find.";
}
echo $output;

?>