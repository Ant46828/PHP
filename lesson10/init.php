<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Init DataBase Page</title>
</head>
<body>
<?php
require_once('config.php');
initDatabase();
?>
<h1 style="text-align: center;">Init database success!</h1>
<p>
	<a href="index.php">Home</a>
</p>
</body>
</html>