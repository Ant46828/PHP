<?php
require_once('../config.php');

if(!empty($_POST)) {
	$id = $_POST['id'];
	query("delete from student where id = $id");

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
			XÁC MINH TÀI KHOẢN XÓA
		</div>
		<div class="card-body" style="width: 50%;">
			<table class="table table-bordered">
				<tr>
					<th>Ho ten</th>
					<td><?=$std['fullname']?></td>
				</tr>
				<tr>
					<th>Tuoi</th>
					<td><?=$std['age']?></td>
				</tr>
				<tr>
					<th>Dia chi</th>
					<td><?=$std['address']?></td>
				</tr>
			</table>
			<form method="post">
				<input type="hidden" name="id" value="<?=$id?>">
				<button class="btn btn-danger">Bạn chắc chắn muốn xóa sinh viên này</button>
			</form>
			<br/>
			<br/>
			<p>
				<a href="index.php">Quay về danh sách</a>
			</p>
		</div>
	</div>
</div>
</body>
</html>