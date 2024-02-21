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

    <div class='container' style='padding-top: 50px;'>
    <div class="row justify-content-center">
    <div class='col-md-6'>
    <form action="login" method="post"> 
            <legend>Sign in</legend>
                <label>Username:</label>
                <input required class="form-control" type="text" name="username" style="width: 250px;"><br>
                <label>Password:</label>
                <input required class="form-control" type="password" name="password" style="width: 250px;"><br>
                <button  type="submit" class="btn btn-primary">Login</button>
            
             <a href="signup.php" style="padding-left: 20px;">Don't have an account?</a>
    </form>
    </div>
    </div>
    </div>
</body>
</html>