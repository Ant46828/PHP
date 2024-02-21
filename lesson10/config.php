<?php
session_start();

define('HOSTING', 'localhost');
// define('USERNAME', 'gokisoft');
define('USERNAME', 'root');
// define('PWD', 'iv@*NIFyTdKEgh]D');
define('PWD', '');
define('DATABASE', 'gift_db');

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function initDatabase() {
	//Tao CSDL
	$sql = "create database if not exists gift_db";

	$conn = mysqli_connect(HOSTING, USERNAME, PWD);
	mysqli_set_charset($conn, 'utf8');

	//B2. Thuc hien insert du lieu vao CSDL
	mysqli_query($conn, $sql);

	//B3. Dong ket noi
	mysqli_close($conn);

	//Tao tables
	$sql = 'create table if not exists gift (
		id int primary key auto_increment,
		title varchar(150),
		thumbnail varchar(500),
		content longtext,
		price float,
		created_at datetime,
		updated_at datetime,
		id_user int
	)';
	query($sql);

	$sql = 'create table if not exists users (
		id int primary key auto_increment,
		fullname varchar(50),
		email varchar(150) unique,
		password varchar(100),
		token varchar(255) unique
	)';
	query($sql);
}

/**
* Query: insert, update, delete
*/
function query($sql) {
	// $conn = mysqli_connect('localhost:3307', 'gokisoft', 'iv@*NIFyTdKEgh]D', 'c2307l');
	$conn = mysqli_connect(HOSTING, USERNAME, PWD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//B2. Thuc hien insert du lieu vao CSDL
	// $sql = "insert into users (fullname, email, phone_number, address, created_at, updated_at) values ('TRAN VAN AAA', 'tranvana@gmail.com', '1234567890', 'Ha Noi', '2023-01-02 09:30:00', '2023-01-02 09:30:00')";
	// $sql = "delete from users where id = ".$id;
	mysqli_query($conn, $sql);

	//B3. Dong ket noi
	mysqli_close($conn);
}

function select($sql) {
	$conn = mysqli_connect(HOSTING, USERNAME, PWD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	//B2. Thuc hien insert du lieu vao CSDL
	// $sql = "insert into users (fullname, email, phone_number, address, created_at, updated_at) values ('TRAN VAN AAA', 'tranvana@gmail.com', '1234567890', 'Ha Noi', '2023-01-02 09:30:00', '2023-01-02 09:30:00')";
	// $sql = "select * from users";
	$resultset = mysqli_query($conn, $sql);
	$dataList = [];

	while(($row = mysqli_fetch_array($resultset, 1)) !== null) {
		$dataList[] = $row;
	}

	//B3. Dong ket noi
	mysqli_close($conn);

	return $dataList;
}

function getPost($key) {
	if(isset($_POST[$key])) {
		return $_POST[$key];
	}
	return "";
}