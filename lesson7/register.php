
<?php
session_start();

$UserList = [];

if(isset($_SESSION['UserList'])) {
    $UserList = $_SESSION['UserList'];
}

if(!empty($_POST)) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $List = [
        "username" => $username,
        "email" => $email,
        "password" => $password
    ];
    $UserList[] = $List;
}

    $_SESSION['UserList'] = $UserList;
?>



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
        legend {
            background-color: aqua;
            border-radius: 8px;
            text-indent: 15px;
        }
        button:hover {
            background-color: yellow;
        }
    </style>

    <div class="container" style="padding-top:20px">
    <div class="row justify-content-center">
    <div class="col-md-6">
    <form method="POST">
    <legend>Register</legend>
            <label>User Name:</label>
            <input class="form-control" type="text" name="username" style="width: 400px;">
            <label>Email:</label>
            <input class="form-control" type="email" name="email" style="width: 250px;">
            <label>Password:</label>
            <input class="form-control" type="password" name="password" style="width: 250px;"><br>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
    <a href="login.php" style="padding-left: 20px;">Already had an account?</a>
    </form>
    </div>
    </div>
    </div>

</body>
</html>