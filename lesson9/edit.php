<?php
require_once('../config.php');

if(!empty($_POST)) {
	$id = $_POST['id'];
	$fullname = $_POST['fullname'];
	$age = $_POST['age'];
	$address = $_POST['address'];

	$sql = "update student set fullname='$fullname', age='$age', address = '$address' where id = $id";
	query($sql);

	header('Location: index.php');
}

$id = $_GET['id'];
$stdList = select("select * from student where id = $id");
if($stdList == null || count($stdList) == 0) {
	header('Location: index.php');
}

$std = $stdList[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thêm Sinh Viên</title>
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
	<div class="card">
		<div class="card-header bg-info text-white">
			NHAP THONG TIN SINH VIEN
		</div>
		<div class="card-body">
			<form method="post">
				<div class="form-group">
					<label>Ten Sinh Vien:</label>
					<input type="hidden" name="id" value="<?=$id?>">
					<input required type="text" name="fullname" class="form-control" value="<?=$std['fullname']?>">
				</div>
				<div class="form-group">
					<label>Tuoi:</label>
					<input required type="number" name="age" class="form-control" value="<?=$std['age']?>">
				</div>
				<div class="form-group">
					<label>Dia Chi:</label>
					<input required type="text" name="address" class="form-control" value="<?=$std['address']?>">
				</div>
				<div class="form-group">
					<button class="btn btn-success">Luu</button>
					<button type="reset" class="btn btn-warning">Xoa Form</button>
				</div>
			</form>
			<p>
				<a href="index.php">Quay về danh sách</a>
			</p>
		</div>
	</div>
</div>
</body>
</html>