<?php

include "config.php";

$Name = $_POST['Cname'];
$Phone = $_POST['Cphone'];
$Email = $_POST['Cemail'];
$Message = $_POST['Cmsg'];
    
    if($Name != "" && $Phone != "" && $Email != "" && $Message !=""){
        $sql = "INSERT INTO contact(name,phoneno,emailC,message) values('{$Name}','{$Phone}','{$Email}','{$Message}')";
        if(mysqli_query($conn,$sql)){
            echo "Message sent!";
        }else{
            echo "Something Went Wrong !";
            header("Location: ../");
        }
    }else{
        echo "Fill All The Field !"; 
        header("Location: ../");      
    }   

?>