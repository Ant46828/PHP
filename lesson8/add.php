<?php
$fullname=$email=$phone=$address="";
if(!empty($_POST)) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $date = date('Y-m-d H:i:s');
    
    $conn = mysqli_connect('localhost:3306','root','','c2307l');
  
    mysqli_set_charset($conn,'utf8');
    $sql="insert into users (fullname, email, phone_number, address, created_at, updated_at) values
    ('$fullname','$email','$phone','$address','$date','$date')";
    
    mysqli_query($conn,$sql);
   
    mysqli_close($conn);
}
?>