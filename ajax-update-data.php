<?php

	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	
	$conn = new PDO("mysql:host=localhost;dbname=user;charset=utf8", "root", "");
	
	$query = $conn->prepare("UPDATE user SET name = :name, email = :email WHERE id = :id");
	$query->execute(array(':id'=>$id, ':name'=>$name, ':email'=>$email));
	
	if($query){
		echo 1;
	}else{
		echo 0;
	}

?>