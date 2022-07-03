<?php
$conn = new PDO("mysql:host=localhost;dbname=user;charset=utf8", "root", "");
$limit_per_page = 5;
if(isset($_POST['page_no'])){
	$page = $_POST['page_no'];
}else{
	$page = 1;
}

$offset = ($page - 1) * $limit_per_page;

$query = $conn->prepare("SELECT * FROM user LIMIT {$offset}, {$limit_per_page}");
$query->execute();
if($query->rowCount() > 0){
	echo "<table border='1'><tr><th width='20'>SL</th><th>Name</th><th>Email</th><th width='100' colspan='2'>Action</th></tr>";
	$i = 0;
	while($row = $query->fetch(PDO::FETCH_ASSOC)){
		$i++;
		echo "<tr><td><center>{$i}</center></td><td>{$row['name']}</td><td>{$row['email']}</td><td><button class='btn-secondary edit-btn' data-eid='{$row['id']}'>Edit</button></td><td><button class='btn-primary delete-btn' data-id='{$row['id']}'>Delete</button></td></tr>";
	}
	$query = $conn->prepare('SELECT * FROM user');
	$query->execute();
	$total_record = $query->rowCount();
	$total_pages = ceil($total_record/$limit_per_page);
	echo "</table><div id='pagination'>";
	
	for($i = 1; $i <= $total_pages; $i++){
	if($page == $i){ $active = "active"; }else{ $active = ""; }
	echo "<a class='{$active}' id='{$i}' href=''>{$i}</a>";
	}
	echo "</div>";
}else{
	echo "No records have been found!";
}
?>