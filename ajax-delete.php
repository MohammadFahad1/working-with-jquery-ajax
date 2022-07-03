<?php
	$id = $_POST['id'];
	
	$conn = new PDO("mysql:host=localhost;dbname=user;charset=utf8", "root", "");
	
	$query = $conn->prepare("DELETE FROM user WHERE id = :id");
	$query->execute([':id' => $id]);
	
	if($query){
		echo 1;
	}else{
		echo 0;
	}
	
	//Practice
	// $id = $_POST['id'];
	// $conn = new PDO("mysql:host=localhost;dbname=user;charset=utf8", "root", "");
	// $query = $conn->prepare("DELETE FROM user WHERE id = :id");
	// $query->execute([':id' => $id]);
	// if($query){
		// echo 1;
	// }else{
		// echo 0;
	// }
?>