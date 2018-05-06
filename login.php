<!DOCTYPE html>
<html>
	<head>
		<title> Login Illustration	</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		
	</head>
	<body>
		
		<form action="abc.php">
			<div class="imageContainer">
				<img src="images/loginImage.png" alt="avatar" class="avatar">
			</div>
		
			<div class="container">
				<label for="uname"> UserName	</label>
				<input type="text" placeholder="Enter UserName" name="uname" required> <br>
				<label for="pwd"> Password	</label>
				<input type="password" placeholder="Enter Password" name="pwd" required>
			</div>
			
			<div class="container">
				<label> 
					<input type="checkbox" name="remember" checked> Remember Me </input>
				</label>
				<label><a class="pwd" href="#"> Forgot Password </a> <label>
			</div>

			<div class="container">
				
								<button type="submit"> Login </button>
			</div>
		</form>
	</body>
</html>