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
    <div class="input">
    <table>
    <legend>Input detail informations</legend>
    <form method="post" action="action.php">
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
    </form>
    </div>
</div>
</body>
</html>