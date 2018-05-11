<!DOCTYPE html>
<html>
	<head>
		<title> Student Management System	</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css" type="text/css">
<style>	
</style>
	</head>
	<body>
		<!--Navigation to the admin Login Page-->
		<nav class="adminLoginIcon"><a href="login.php" class="adminLink"><span class="backgroundLoginLink">Admin Login</span></a></nav>		
		
		<!--Main Heading-->
		<h1> Welcome to Student Management System	</h1>

		<!--Form to enter the standard and RollNumber of student to visit his/her corresponding Details -->
		<form class="infoForm" action="index.php" method="post">
			<h2 class="imageContainer">
				STUDENT INFORMATION
			</h2>
		
			<!--A dropdown menu bar to enter the standard of the student-->
			<div class="container">
				<label for="STD"> Choose Standard:	</label>
				<select class="standard"  id="STD" name="std" required>
					<option value="9">	Class 9th	</option>
					<option value="10">	Class 10th	</option>
					<option value="11">	Class 11th	</option>
					<option value="12">	Class 12th	</option>
				</select>
				<br>
			</div>
			
			<!--A textbox to enter the rollno. of the student-->
			<div class="container">
			<label for="roll"> Enter RollNo:	</label>
				<input type="text" class="rollno" id="roll" placeholder="Enter Roll No." name="rollno" required style="display:inline">
			</div>

			<div class="container">		
					<button type="submit" name="submit" > Show Information </button>
			</div>
		</form>
		
		<!--The table which shows the detail of the student-->
		<div id="studentDetail">
		<table>
		    <thead>	
			<tr>
				<th> S.No. </th>
				<th> Standard	</th>
				<th> RollNo.	</th>
				<th> Student Name	</th>
				<th> City </th>
				<th> Parent's Contact No.	</th>
				<th> Photo	</th>
			</tr>
		    </thead>
		    <tbody>
			    <!--if button is clicked then fetch the information from the database and displays it on the mainpage itself-->
			<?php 
				if(isset($_POST["submit"]))
				{
					include("dbcon.php");
			
					$std = $_POST["std"];
					$rollno = $_POST["rollno"];
				
					$query = "SELECT * FROM student where standard='$std' AND rollno='$rollno' ";
			
					$run = mysqli_query($con, $query);
			
					if(mysqli_num_rows($run)<1)
					{
						echo "<tr><td colspan='7' align='center'>No Records Found</td></tr>";		
					}		
					else
					{	
						$count = 1;
						while($data=mysqli_fetch_assoc($run))
						{	
							?>
							<tr>
								<td> <?php echo $count; ?>					</td>
								<td> <?php echo $data['standard']; ?>	</td>
								<td> <?php echo $data['rollno']; ?>		</td>
								<td> <?php echo $data['name']; ?>		</td>
								<td> <?php echo $data['city']; ?>	 	</td>
								<td> <?php echo $data['pcont']; ?>	 	</td>
								<td> <img src="dataimg/<?php echo $data['image']?>" >	 </td>
							</tr>
							<?php	
							$count++;		
						}	
					}
				}
			?>
			    </tbody>
			</table>
		</div>
		
		<!--Initially To make the student details table hidden-->	
		<?php
		
		 if(isset($_POST["submit"]))
		 {			 
		 }
		 else
		 {
			?>
			<script>
				function hideFunc(){
				var x = document.getElementById("studentDetail");
				x.style.visibility="hidden";	
				}
				hideFunc();
			</script>
			<?php		 
		 }
		?>
	
	</body>
</html>
