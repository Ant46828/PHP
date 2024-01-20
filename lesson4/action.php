<?php
$fullname = $email = $password = "";
if(!empty($_POST)) {
	if(isset($_POST['fullname'])) {
		$fullname = $_POST['fullname'];
	}

	if(isset($_POST['email'])) {
		$email = $_POST['email'];
	}

	if(isset($_POST['phone'])) {
		$phone = $_POST['phone'];
	}

    if(isset($_POST['address'])) {
		$address = $_POST['address'];
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Full Name</th>
				<th>Email</th>
				<th>Phone</th>
                <th>Address</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<?php
						echo $fullname;
					?>
				</td>
				<td>
					<?php
						print($email);
					?>
				</td>
				<td><?=$phone?></td>
                <td><?php
                        echo $address;
                    ?>
                </td>
			</tr>
		</tbody>
	</table>
</div>
</body>
</html>