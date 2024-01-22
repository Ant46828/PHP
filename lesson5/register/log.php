<?php
    if(!empty($_POST)) {
        $email=$_COOKIE['email'];
        $pass =$_COOKIE['pass'];
        $p_email = $_POST['email'];
        $p_pass = $_POST['pass'];
        if($p_email==$email && $p_pass==$pass) {
            header('location:welcome.php');
            die;
        }
        elseif($p_email!=$email && $p_pass==$pass) {
            echo '<center><h2>Nhap lai</h2></center';
        }
    }
?>