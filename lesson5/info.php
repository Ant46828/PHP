<?php
    if(!empty($_POST)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $address = $_POST['address'];
        setcookie("name",$name,time() + 24*60*60, "/");
        setcookie("email",$email,time() + 24*60*60, "/");
        setcookie("pass",$pass,time() + 24*60*60, "/");
        setcookie("address",$address,time() + 24*60*60, "/");
        header('location:login.php');
        die();
    }
?>