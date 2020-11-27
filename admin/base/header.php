<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/all.css">
    <link rel="stylesheet" href="./asset/css/style.css">      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="./asset/js/jquery.min.js"></script>
    <link rel="icon" href=".././exam.svg" type="image/svg" sizes="16x16"> 
    
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top text-md-center">
            <div class="container">
                <a class="navbar-brand" href="./Home.php">
                    <img src="./asset/image/logo_a.svg" width="150" height="50" alt="">
                </a>
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-4">
                            <a class="nav-link" active href="./Home.php">Home</a>
                        </li>
                </ul>
                <div>
                <a class="nav-link btn btn-danger"  href="./data/logout.php">Logout user</a>
            </div>
        </nav>
    </div>