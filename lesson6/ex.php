<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Student Manager</title>
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
    <div class= "container">
        <div class="info">
    <table class="table table-bordered">
        <legend>Management</legend>
        <tr>
            <th>No</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address<th>
        </tr>
    </table>
    </div>
    <div class="input">
    <table>
    <legend>Input detail informations</legend>
            <label>Full Name:</label>
            <input class="form-control" type="text" name="fullname" >
            <label>Email:</label>
            <input class="form-control" type="email" name="email">
            <label>Phone number:</label>
            <input class="form-control" type="tel" name="phone">
            <label>Address:</label>
            <input class="form-control" type="text" name="address"><br>
    </table>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
    </div>

    <?php
    $fullname=$email=$phone=$address="";
    if(!empty($_POST)) {
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
    }

    $conn = mysqli_connect('localhost:3306','root','','Works');
    mysqli_set_charset($conn,'utf8');

    $sql = "insert into users (fullname,email,phone,address)
            values ('$fullname','$email','$phone','$address')";

    mysqli_query($conn, $sql);

    mysqli_close($conn);

    ?>
</div>
</body>
</html>