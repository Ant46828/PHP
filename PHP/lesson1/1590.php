<!DOCTYPE html>
<html>
<head>
	<title>Info</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</head>
<body>
	<?php
		$name = 'Vu Nguyen Truong An';
        $age = '18';
        $address = 'Ha Noi';
        $email = 'an@gmail.com';
        $phone = '0968241482';
	echo '	<div class="container">
		<table class="table table-bordered">
			<thread>
			<th>Tên</th>
			<th>Tuổi</th>
			<th>Địa Chỉ</th>
			<th>Email</th>
			<th>SĐT</th>
			</thread>
			<tbody>';
	?>

			<td><?=$name?></td>
			<td><?=$age?></td>
			<td><?=$address?></td>
			<td><?=$email?></td>
			<td><?=$phone?></td>
	<?php
	echo '</tbody>
		</table>
	</div>';
	?>
</body>
</html>	