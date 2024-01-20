<?php
    $fullname=$email=$phone=$address='';
    if(!empty($_POST)) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        echo 'Full name: ';
        echo $fullname;
        echo '</br>';

        echo 'Email: ';
        echo $email;
        echo '</br>';

        echo 'Phone: ';
        echo $phone;
        echo '</br>';

        echo 'Address: ';
        echo $address;
        echo '</br>';
    }
?>