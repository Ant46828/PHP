<?php
require_once('../../config.php');
require_once('../../models/users.php');

$title = "";
if(!empty($_POST)) {
	$user = new Users();
	$user->processForm();
	$user->register();

	header('Location: login.php');
	die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
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
				<div class="form-group">
					<label>Email: </label>
					<input required type="text" name="email" placeholder="Enter email" class="form-control">
				</div>
				<div class="form-group">
					<label>Full Name: </label>
					<input required type="text" name="fullname" placeholder="Enter fullname" class="form-control">
				</div>
				<div class="form-group">
					<label>Password: </label>
					<input required type="password" name="password" placeholder="Enter pwd" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-success">Login</button>
					<p>
						<a href="login.php">Login page</a>
					</p>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>