<?php

	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['search'])){
		
		$search = $_POST['search'];
		
		try{
			$conn = new PDO("mysql:host=localhost;dbname=user;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			$query = $conn->prepare("SELECT * FROM user WHERE name LIKE CONCAT('%', :name, '%') OR  email LIKE CONCAT('%', :email, '%')");
			$query->execute([':name' => $search, ':email' => $search]);
			
			if($query->rowCount() > 0){
				echo "<table border='1'><tr><th width='20'>SL</th><th>Name</th><th>Email</th><th width='100' colspan='2'>Action</th></tr>";
				$i = 0;
				while($row = $query->fetch(PDO::FETCH_ASSOC)){
				$i++;
				echo "<tr><td><center>{$i}</center></td><td>{$row['name']}</td><td>{$row['email']}</td><td><button class='btn-secondary edit-btn' data-eid='{$row['id']}'>Edit</button></td><td><button class='btn-primary delete-btn' data-id='{$row['id']}'>Delete</button></td></tr>";
				}
				echo "</table>";
					}else{
				echo "No records have been found!";
				}
			
		}catch(PDOException $e){
			echo "Failed to run this Query";
		}
		
	}

?>