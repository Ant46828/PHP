<?php 
require_once("info.php");

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dang ky</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Dang ki tai khoan</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="name">Ho va ten:</label>
      <input type="text" class="form-control" id="name" placeholder="Nhap ten" name="name">
    </div>
    <div>
        <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Nhap email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Nhap password" name="pswd">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
    <button type="submit" class="btn btn-primary">Dang ky</button>
    
  </form>
</div>

</body>
</html>