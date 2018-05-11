<?php
	session_start();
 	if(isset($_SESSION["userID"]))
 	{
		 	header("location:admin/admindash.php");
 	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Admin Login	</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>

	<body class="body">
		
		<h1> Admin Login	</h1>
		<!--Login Form of Admin-->
		<form class="loginForm" action="login.php" method="post">
			<div class="imageContainer">
				<img src="images/loginImage.png" alt="avatar" class="avatar">
			</div>

			<div class="container">
				<label for="UN"> UserName	</label>
				<input class="uname" type="text" placeholder="Enter UserName" name="uname" id="UN" required> <br>
				<label for="PWD"> Password	</label>
				<input type="password" id="PWD" placeholder="Enter Password" name="pwd" required>
			</div>

			<div class="container">
				<label> 
					<input type="checkbox" name="remember" checked> Remember Me </input>
				</label>
				<label><a class="pwd" href="#"> Forgot Password </a> <label>
			</div>

			<div class="container">
				<button type="submit" name="login"> Login </button>
			</div>
		</form>
	</body>
</html>

<?php

include("dbcon.php");

//check if login button is clicked with corresponding information , and checks whether the details exist in the database , if exist so starts the corresponding access and provide the session id
if(isset($_POST['login']))
{
	$username = $_POST["uname"];
	$pwd = $_POST["pwd"];
	
	$query = "SELECT * FROM admin WHERE username='$username' AND password='$pwd' ";
	$run = mysqli_query($con, $query);
	
	$row = mysqli_num_rows($run);
	if($row<1)
	{
		?>		
		<script>
			alert("Username or Password not matched");
			window.open("login.php","_self");
		</script>
		<?php	
	}
	else
	{
		$data = mysqli_fetch_assoc($run);
		$id = $data["id"];
		$_SESSION["userID"] = $id;
		header("location:admin/admindash.php");
	}
}
?>
