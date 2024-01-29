
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

    <div class="input">
    <form method="POST">
    <legend>Input detail informations</legend>
            <label>User Name:</label>
            <input class="form-control" type="text" name="username" >
            <label>Email:</label>
            <input class="form-control" type="email" name="email">
            <label>Password:</label>
            <input class="form-control" type="password" name="password"><br>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
    </form>
    </div>

</body>
</html>
    <div class= "container">
        <div class="info">
    <table class="table table-bordered">
        <legend>Management</legend>
        <tr>
            <th>No</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
<?php
    $count = 0;
    foreach($UserList as $user) {
        echo '<tr>
                <td>'.($count+1).'</td>
                <td>'.$user['username'].'</td>
                <td>'.$user['email'].'</td>
                <td>'.$user['password'].'</td>
                <td>
                    <button>Sua</button>
                    <button>Xoa</button>
                </td>
              </tr>';
            $count++;
    }
?>
