<?php
session_start();

if(isset($_SESSION['admin']) || isset($_SESSION['username'])){
    header("Location: ./Home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/all.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <script src="./asset/js/jquery.min.js"></script>
</head>

<body>
<div id="adminlogin" class="d-flex justify-content-center align-items-center position-relative">
        <div class="row">
        <div id="LAccount">
            <div id="admin_head" class="col-12">
                <h2> User Login</h2>
                <form method="post" action="./data/checkuserlogin.php" class="my-3">
                    <div class="form-group">
                        <label for="">User Name/ Email </label>
                        <input type="text" class="form-control" name="luname" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="lupwd" aria-describedby="helpId">
                    </div>
                    <input type="submit" class="btn btn-primary text-white" value="Login">
                    <a  id="Cbtn" class="btn btn-link text-primary">Create New Account</a>
                </form>
            </div>
</div>
            <div id="CAccount">
            <div id="admin_head" class="col-12">
                <h2> User Registertion</h2>
                <form method="post" action="./data/userinsert.php" class="my-3">
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" name="cfname" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">User Name/ Email </label>
                        <input id="Chuser" type="text" class="form-control" name="cuname" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="cupwd" aria-describedby="helpId">
                    </div>
                    <input type="submit" class="btn btn-primary text-white" value="Signup">
                    <a  id="Lbtn" class="btn btn-link text-primary">Already Have a Account.</a>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>

<script src="./asset/js/queryajax.js"></script>
</html>