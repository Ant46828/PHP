<?php
require_once('../../config.php');
require_once('../../models/gift.php');
require_once('../../models/users.php');

$userModel = new Users();
$user = $userModel->autoLogin();
if($user == null) {
	header('Location: ../user/login.php');
}

$idUser = $_SESSION['user']['id'];
$gift = new Gift();
//original
// $dataList = $gift->findAll($idUser);
//sql injection
// $dataList = $gift->findAll("0 or id_user > 0 or id_user = ".$idUser);
//original
$dataList = $gift->findAllPDO($idUser);
//test sql injection vs PDO
$dataList = $gift->findAllPDO("0 or id_user > 0 or id_user = ".$idUser);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gift Page</title>
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
		<h1 style="mau: red; text-align: center">Welcome <?=$_SESSION['user']['fullname']?></h1>
		<div class="col-md-12 mt-3">
			<a href="add.php"><button class="btn btn-success" style="float: left;">Them moi</button></a>
			<form method="get">
				<input type="text" name="s" placeholder="Tim kiem ..." class="form-control" style="width: 200px; float: right;">
			</form>
		</div>
		<div class="col-md-12">
			<div class="card mt-3">
				<div class="card-header bg-info text-white">
					DANH SACH GIFT
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tieu De</th>
								<th>Gia</th>
								<th>Ngay Sua</th>
								<th style="width: 180px;"></th>
							</tr>
						</thead>
						<tbody>
		<?php
		$count = 0;
		foreach ($dataList as $item) {
			echo '<tr>
					<td>'.(++$count).'</td>
					<td>'.$item['title'].'</td>
					<td>'.$item['price'].'</td>
					<td>'.$item['updated_at'].'</td>
					<td>
						<a href="edit.php?id='.$item['id'].'"><button class="btn btn-warning">Sua</button></a>
						<a href="delete.php?id='.$item['id'].'"><button class="btn btn-danger">Xoa</button></a>
					</td>
				</tr>';
		}
		?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>