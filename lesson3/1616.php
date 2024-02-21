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
    <?php
        const HOST = 'localhost';
        const USERNAME = 'root';
        const PASSWORD = '';
        const DATABASE = 'qlsvphp';
    ?>

    <?php

        if (!empty($_POST)) {
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];

            if ($Name != "" && $Password != "") {
                $query ='insert into  student(username,email,password) values("'.$Name.'","'.$Email.'","'.$Password.'")';
                query($query);
            }
        } 
    ?>

    <?php
    function query($query) {
        $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
        mysqli_set_charset($conn, 'utf-8');
    
        mysqli_query($conn, $query);
        $conn->close();
    }
    
    function select($query) {
        $conn = new mysqli('localhost', 'root', '', 'qlsvphp');
        mysqli_set_charset($conn, 'utf-8');
        $cusor  = mysqli_query($conn, $query);
        $result = [];
        while ($row = mysqli_fetch_array($cusor, 1)) {
            $result[] = $row;
        }
        $conn->close();
        return $result;
    }
    ?>
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

        <?php
            if(isset($_GET['username'])) {
                $uname = $_GET['username'];
            }
            if(isset($_GET['email'])) {
                $uname = $_GET['email'];
            }
            if(isset($_GET['password'])) {
                $uname = $_GET['password'];
            }
        ?>

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
        $query  = 'select * from student';
        $result = ($query);
        for ($i = 0; $i < $count ; $i++) {
            echo '<tr>
                        <td>'.($i+1).'</td>
                        <td>'.$result[$i]['username'].'</td>
                        <td>'.$result[$i]['email'].'</td>
                        <td>'.$result[$i]['password'].'</td>
                    </tr>';
        }
        ?>
    </table>
    </div>
    <div class="input">
    <table>
    <legend>Input detail informations</legend>
            <label>User Name:</label>
            <input class="form-control" type="text" name="username" >
            <label>Email:</label>
            <input class="form-control" type="email" name="email">
            <label>Password:</label>
            <input class="form-control" type="password" name="password"><br>
    </table>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
    </div>

</div>

</body>
</html>