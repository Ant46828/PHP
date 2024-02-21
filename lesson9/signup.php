<?php
require_once("query.php");
require_once("config.php");
$username=$password=$realname=$phone=$email='';
    if(!empty($_POST)) {
        if(!isset($_POST['username'])) {
            $username=$_POST['username'];
        }
        if(!isset($_POST['password'])) {
            $password=$_POST['password'];
        }
        if(!isset($_POST['realname'])) {
            $realname=$_POST['realname'];
        }
        if(!isset($_POST['phone'])) {
            $phone=$_POST['phone'];
        }
        if(!isset($_POST['email'])) {
            $email=$_POST['email'];
        }
    }
    if (!empty($username) && !empty($password)) {
        $sql="insert into users (Username,Email,Realname,Phone,Password) values ('$username', '$email','$realname','$phone','$password')";
        
        querysql($sql);

        
    }
    header('signin.php');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
        .info {
            border: 2px solid;
            padding: 20px;
            margin-top:30px;
            border-radius: 10px;
        }
        .input{
            border: 2px solid;
            padding: 20px;
            margin-top:30px;
            border-radius: 10px;
            
        }
        legend {
            background-color: aqua;
            border-radius: 8px;
            text-indent: 15px;
        }
        button:hover {
            background-color: yellow;
        }
    </style>

<div class='container' style='padding-top: 50px';>
<div class="row justify-content-center">
    <div class='col-md-6'>
                <legend>Sign up</legend>
                <form action="signup.php" method="post"> 
                    <label>Username:</label>
                    <input required class='form-control' type="text" name="username">
                    <label>Password:</label>
                    <input required class='form-control' type="password" name="password">
                    <label>Realname:</label>
                    <input class='form-control' type="text" name="realname">
                    <label>Email:</label>
                    <input required class='form-control' type="email" name="email">
                    <label>Phone:</label>
                    <input required class='form-control' type="number" name="phone"><br>
                    <button type="submit" class='btn btn-primary'>Submit</button>
                    <a href="signin.php" style='padding-left: 20px;'>Already had an account?</a>

    </div>
    </div>
    </div>
</body>
</html>