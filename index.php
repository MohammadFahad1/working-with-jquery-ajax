<!DOCTYPE html>
<html>
<head>
<title>Ajax Practice</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="container">
	
	
	<div class="search">
		<br>
		<br>
		<input type="text" id="search" placeholder="Search what you want...">
		<br>
		<br>
		<br>
	</div>
	
	
	
		<div class="row1">
		<h1>Load Dynamic Data through Ajax</h1>
		<button id="load-button" class="btn-primary">Load Entire Table</button>
			<div id="data">
	
			</div>
		</div>
		<div class="row2">
			<h1>Insert Dynamic Data using Ajax</h1><br>
			<form action="" method="post" id="addForm">
				<input type="text" name="name" id="name" placeholder='Enter Your Name...'>
				<br><br>
				<input type="email" name="email" id="email" placeholder="Enter your Email..."><br>
				<input type="submit" name="submit" id="save-button" value="Submit" class="btn-primary">
			</form>
		</div>
		<div class="clear"></div>
		<div id='x'><div id="success-msg"></div></div>
		<div id="modal-box">
			<div id="modal">
				<h3>Update Form</h3>
				<table>
					
				</table>
				<button id="close">X</button>
			</div>
		</div>
	</div>
	<a href="index.php" class="btn-secondary fixed-bottom-right">Refresh</a>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){
		
	//Closing Success Message
	$("#x").on("click", function(){
		$("div#success-msg").slideUp();
		$(this).slideUp();
	});
		
	//Load Data on button click
		$("#load-button").on("click", function(){
			$.ajax({
				url: "load.php",
				type: "post",
				success: function(data){
					$("#data").html(data);
				}
			});
		});
	});
	
	
	//Load data automatically
	$(document).ready(function(){
		function loadTable(page){
			$.ajax({
				url: "load.php",
				type: "POST",
				data: {page_no: page},
				success: function(data){
					$("#data").html(data);
				}
			});
		}
		loadTable();
	$(document).on("click", "#pagination a", function(e){
		e.preventDefault();
		var page_id = $(this).attr("id");
		loadTable(page_id);
	});
		
	//Inserting Data
	$("#save-button").on("click", function(e){
		e.preventDefault();
		var name = $("#name").val();
		var email = $("#email").val();
		
		function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
		}
		
	if(name == "" || email == ""){
		alert("Fields must not be empty");
		return false;
	}
	if(!isEmail(email)){
		alert("Please Enter an Valid Email Address!");
	}
		
		$.ajax({
			url: "ajax-insert.php",
			type: "POST",
			data: {user_name: name, user_email: email},
			success: function(data){
				if(data == 1){
					loadTable();	
					$("#addForm").trigger("reset");
					$("#success-msg").html("Data Inserted Successfully!").slideDown();
					$("#x").slideDown();
				}else{
					alert("Can't Save Record");
				}
			}
		});
	});
	
	
	//Delete Data
	$(document).on("click", ".delete-btn", function(){
		if(confirm("Do you really want to delete this record ?")){
		var studentId = $(this).data("id");
		var element = $(this);
		$.ajax({
			url: "ajax-delete.php",
			type: "POST",
			data: {id: studentId},
			success: function(data){
				if(data == 1){
					$(element).closest("tr").fadeOut('fast');
					$("#success-msg").html("Data has been deleted successfully!").slideDown();
					$("#x").slideDown();
				}else{
					alert('Failed to Delete Data');
				}
			}
		});
		}
	});
	
	
	//Show Update PopUp Form
	$(document).on("click", ".edit-btn", function(e){
		e.preventDefault();
		var studentId = $(this).data("eid");

		$.ajax({
			url: "ajax-update-data-load.php",
			type: "POST",
			data: {id: studentId},
			success: function(data){
				$("#modal table").html(data);
				$("#modal-box").show();
			}
		});
	});
	//Close Update popUp Form
	$("#close").on("click", function(e){
		e.preventDefault();
		$("#modal-box").hide();
	});
	
	
	//Updating User Data
	$(document).on("click", "#update-submit", function(e){
		
		e.preventDefault();
		
		var id = $("#uid").val();
		var name = $("#uname").val();
		var email = $("#uemail").val();
		
		$.ajax({
			url: "ajax-update-data.php",
			type: "POST",
			data: {id: id, name: name, email: email},
			success: function(data){
				if(data == 1){
					$("#modal-box").hide();
					loadTable();
				}else{
					alert("Failed to update this data!");
				}
			}
		});
	});
	
	
	//Search Data
	$("#search").on("keyup", function(){
		var search_term = $(this).val();
		
		$.ajax({
			url: "ajax-search-data.php",
			type: "POST",
			data: {search: search_term},
			success: function(data){
				$("#data").html(data);
			}
		});
	});
	
	//Practice Starts bellow
		
	//Practice Ends above
	
	});
</script>
</body>
</html>