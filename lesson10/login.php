<?php
require_once('../../config.php');
require_once('../../models/users.php');

$title = "";
if(!empty($_POST)) {
	$user = new Users();
	$user->processForm();
	$check = $user->login();

	if($check) {
		header('Location: ../gift');
		die();
	} else {
		$title = "TAI KHOAN KHONG TON TAI";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Latest compiled JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<form method="post">
				<h1 style="mau: red"><?=$title?></h1>
				<div class="form-group">
					<label>Email: </label>
					<input type="text" name="email" placeholder="Enter email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password: </label>
					<input type="password" name="password" placeholder="Enter pwd" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-success">Login</button>
					<p>
						<a href="register.php">Create a new account</a>
					</p>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>