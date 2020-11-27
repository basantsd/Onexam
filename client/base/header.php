<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/all.css">
    <link rel="stylesheet" href="./asset/css/style.css">   
    <link rel="icon" href=".././exam.svg" type="image/svg" sizes="16x16"> 

    <script src="./asset/js/jquery.min.js"></script>
    <script src="./asset/js/ajaxdata.js"></script>
    
    <?php

    include "./data/config.php";
    $titlebase = basename($_SERVER['PHP_SELF']);
    $exp = explode(".",$titlebase);
    $page = reset($exp);

    if ($page=== "index"){
        echo "<title>Home Page</title>";
    }
    else if($page === "contact"){
        echo "<title>Contact Page</title>";
    }
    else if ($page === "test"){
        echo "<title>All Exam Page</title>";
    }else  if ($page === "testproducts" ){
            $examid = $_GET['Exam'];
            $pageno = $_GET['page'];
            $sql = "SELECT fullques from tbl_ques WHERE examid='{$examid}' AND Qid={$pageno}";
            $res = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($res)){
                echo "<title>{$row['fullques']}</title>";
            }
        }
        else  if ($page === "final" ){
            echo "<title>Result Page </title>";
        }
    else{
        echo "<title>Page Not Find . </title>";
    }

    ?>
    
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top text-md-center">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./asset/image/logo_a.svg" width="150" height="50" alt="">
                </a>
                <button class="navbar-toggler bg-light" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="my-nav" class="collapse navbar-collapse mr-3">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" active href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./test.php">Test</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <a class="nav-link btn btn-danger"  href=".././admin/">Create Exam</a>
            </div>
        </nav>
    </div>