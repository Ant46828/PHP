<a href="Mainmenu.php">Quay ve trang danh sach</a>
<?php
if(!empty($_POST)) {
	$index = $_POST['index'];

	$productList = [];

	if(isset($_COOKIE['productList'])) {
		$json = $_COOKIE['productList'];
		$productList = json_decode($json, true);

		array_splice($productList, $index, 1);

		$json = json_encode($productList);

		setcookie("productList", $json, time() + 30000, "/");
	}
}