<!DOCTYPE html>
<html>
	<head>
		<title> Student Management System	</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css" type="text/css">
<style>
select{
background-color:#4B97D3;
color:#FD2907;
box-shadow:inset 0 0 10px 0 rgba(0,0,0,0.6);
margin-top: 8px;
padding:0.3% 0.4%;
border-radius: 5px;
width: 10%;
border: 2px solid blue;
margin-left:2%;
}

#roll{
	display: inline !important;
}	

</style>
	</head>
	<body>
		<nav><a href="login.php">Admin Login</a></nav>		
		<h1> Welcome to Student Management System	</h1>
		
		<form action="index.php" method="post">
			<div class="imageContainer">
				Student Information
			</div>
		
			<div class="container">
				<label for="std"> Choose Standard:	</label>
				<select class="standard" name="std" required>
					<option>	Class 6th	</option>
					<option>	Class 7th	</option>
					<option>	Class 8th	</option>
					<option>	Class 9th	</option>
					<option>	Class 10th	</option>
				</select>
				<br>
			</div>
			
			<div class="container">
			<label for="rollno"> Enter RollNo	</label>
				<input type="text" id="roll" placeholder="Enter Roll No." name="rollno" required style="display:inline">
			</div>

			<div class="container">		
					<button type="submit"> Login </button>
			</div>
		</form>		
		
		<>
	</body>
</html>