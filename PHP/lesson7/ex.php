<?php
session_start();

$productList = [];
if(isset($_SESSION['productList'])) {
	$productList = $_SESSION['productList'];
}

if(!empty($_POST)) {
	$title = $_POST['title'];
	$category_name = $_POST['category_name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];

	$product = [
		"title" => $title,
		"category_name" => $category_name,
		"price" => $price,
		"quantity" => $quantity
	];

	$productList[] = $product;

	//Luu dc san pham vao cookie
	$_SESSION['productList'] = $productList;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quan Ly San Pham</title>
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
			NHAP THONG TIN SAN PHAM
		</div>
		<div class="card-body">
			<form method="post">
				<div class="form-group">
					<label>Ten SP:</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>Danh Muc:</label>
					<select name="category_name" class="form-control">
						<option value="">-- Chon --</option>
						<option value="Samsung">Samsung</option>
						<option value="LG">LG</option>
					</select>
				</div>
				<div class="form-group">
					<label>Gia:</label>
					<input type="number" name="price" class="form-control">
				</div>
				<div class="form-group">
					<label>So Luong:</label>
					<input type="number" name="quantity" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-success">Luu</button>
					<button type="reset" class="btn btn-warning">Xoa Form</button>
				</div>
			</form>
		</div>
	</div>
	<div class="card mt-3">
		<div class="card-header bg-info text-white">
			DANH SACH SAN PHAM
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>STT</th>
						<th>Ten SP</th>
						<th>San Muc</th>
						<th>Gia</th>
						<th>So Luong</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
<?php
$count = 0;
foreach ($productList as $item) {
	echo '<tr>
			<td>'.($count + 1).'</td>
			<td>'.$item['title'].'</td>
			<td>'.$item['category_name'].'</td>
			<td>'.$item['price'].'</td>
			<td>'.$item['quantity'].'</td>
			<td>
				<button class="btn btn-warning">Sua</button>
				<button class="btn btn-danger">Xoa</button>
			</td>
		</tr>';
	$count++;
}
?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>