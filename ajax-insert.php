<?php

	$conn = new PDO("mysql:host=localhost;dbname=user;charset=utf8", "root", "");
	
	$name = $_POST['user_name'];
	$email = $_POST['user_email'];
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo 0;
	}else{
	$query = $conn->prepare("INSERT INTO user(name, email) VALUES (?, ?)");
	$query->execute([$name, $email]);
	if($query->rowCount()){
		echo 1;
	}else{
		echo 0;
	}
	}
//Practice Starts Bellow
	// $conn = new PDO("mysql:host=localhost;dbname=user;charset=utf8", "root", "");
	// $name = $_POST['user_name'];
	// $email = $_POST['user_email'];
	// $query = $conn->prepare("INSERT INTO user(name, email) VALUES (?, ?)");
	// $query->execute([$name, $email]);
	// if($query->rowCount() > 0){
		// echo 1;
	// }else{
		// echo 0;
	// }
//Practice Ends Above

?>