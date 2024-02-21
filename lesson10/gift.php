<?php
class Gift {
	public $id;
	public $title;
	public $thumbnail;
	public $content;
	public $price;
	public $createdAt;
	public $updatedAt;
	public $idUser;

	public function findAll($idUser) {
		$sql = "select * from gift where id_user = ".$idUser;
		echo $sql;
		return select($sql);
	}

	public function findAllPDO($idUser) {
		//B1. Mo ket noi toi CSDL
		$conn = new PDO("mysql:host=".HOSTING.";dbname=".DATABASE, USERNAME, PWD);
		// set the PDO error mode to exception
  		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		//B2. Truy van
  		$stmt = $conn->prepare("select * from gift where id_user = :id_user");
  		$stmt->bindParam(":id_user", $idUser);
  		$stmt->execute();
  		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  		$result = $stmt->fetchAll();
  		// var_dump($result);

  		//B3. Dong ket noi toi CSDL
  		$conn = null;

  		return $result;
	}
}