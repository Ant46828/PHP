
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Student Manager</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
        .info {
            border: 2px solid;
            padding: 20px;
            margin-top:30px;
            border-radius: 10px;
        }
        .input{
            border: 2px solid;
            padding: 20px;
            margin-top:30px;
            border-radius: 10px;    
        }
        legend {
            background-color: aqua;
            border-radius: 8px;
            text-indent: 15px;
        }
        button:hover {
            background-color: yellow;
        }
    </style>

    <div class="input">
    <form method="POST">
    <legend>Input detail informations</legend>
            <label>Fullname:</label>
            <input class="form-control" type="text" name="fullname" >
            <label>Email:</label>
            <input class="form-control" type="email" name="email">
            <label>Phone number:</label>
            <input class="form-control" type="phone" name="phone">
            <label>Address:</label>
            <input class="form-control" type="text" name="address"><br>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
    </form>
    </div>
	<div class="card mt-3">
		<div class="card-header bg-info text-white">
			DANH SACH NGUOI DUNG
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>STT</th>
						<th>Ten</th>
						<th>Email</th>
						<th>SDT</th>
						<th>Dia Chi</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
<?php
$count = 0;
foreach ($dataList as $item) {
	echo '<tr>
			<td>'.($count + 1).'</td>
			<td>'.$item['fullname'].'</td>
			<td>'.$item['email'].'</td>
			<td>'.$item['phone_number'].'</td>
			<td>'.$item['address'].'</td>
			<td>
				<a href="edit-user.php?id='.$item['id'].'"><button class="btn btn-warning">Sua</button></a>
				<form method="post" action="delete-user.php">
					<input type="hidden" name="id" value="'.$item['id'].'"/>
					<button class="btn btn-danger">Xoa</button>
				</form>
			</td>
		</tr>';
	$count++;
}
?>
</body>
</html>
