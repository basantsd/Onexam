<?php

include "config.php";

session_start();

if(!isset($_SESSION['admin']) && isset($_SESSION['username'])){
    header("Location: ./");
}

$sql = "SELECT * FROM admin_user";
$res = mysqli_query($conn,$sql) or die("Query Failed !");
$output= "";
$i= 1;
if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        $output .= "<tr>
        <td>{$i}</td>
        <td>{$row['FullName']}</td>
        <td>{$row['UserName']}</td>
        <td><a id='delete_user' data-id={$row['admin_id']}><i class='fa fa-trash'></i></a></td>
    </tr>";
    $i++;
    }
    echo $output;
}

else{
    $output .="Sorry! No Data Find.";
}
echo $output;

?>