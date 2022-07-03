<?php

	$id = $_POST['id'];
	
	$conn = new PDO("mysql:host=localhost;dbname=user;charset=utf8", "root", "");
	
	$query = $conn->prepare('SELECT * FROM user WHERE id = :id');
	$query->execute([':id'=>$id]);
	$output = "";
	if($query->rowCount() > 0){
		while($row = $query->fetch(PDO::FETCH_ASSOC)){
			$output .= "<tr>
						<td>Name: </td>
						<td><input type='text' id='uname' value='{$row['name']}'></td>
						<td><input type='number' id='uid' hidden value='{$row['id']}'></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type='email' id='uemail' value='{$row['email']}'></td>
					</tr>
					<tr>
						<td></td>
						<td><input type='submit' id='update-submit' value='Submit' class='btn-primary'></td>
					</tr>";
		}
	}else{
		$output .= "Failed to Load User Data!";
	}
	echo $output;
?>