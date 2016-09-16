<!DOCTYPE html>

<html lang="en">
<head>
	<title>Bostik PH HRIS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		<!-- Remove the navbar's default rounded borders and increase the bottom margin -->
		.navbar	{
			margin-bottom: 50px;
			border-radius: 0;
		}
		
		<!-- Remove the jumbotron's default bottom margin -->
		.jumbotron	{
			margin-bottom: 0;
		}
	   
		<!-- Add a gray background color and some padding to the footer -->
		footer	{
			background-color: #f2f2f2;
			padding: 20px;
		}
		
		li a, .dropbtn	{
			display: inline-block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li.dropdown	{
			display: inline-block;
		}

		.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		}

		.dropdown-content a	{
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		}
		
		.dropdown:hover .dropdown-content	{
			display: block;
		}
	</style>
</head>



<body>
	<div class="jumbotron">
		<div class="container text-center">
			<h1>Bostik Philippines Inc.</h1>
			<p>Human Resources Information System</p>
		</div>
	</div>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href = "#">Logo</a>
				<!-- insert image into logo -->
			</div>
			
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li ><a href="home.php">Home</a></li>
					
					<li class="active"><a href="#">Employee</a></li>
					
					<li class="dropdown"><a href="#" class="dropbtn">Hiring</a>
						<div class="dropdown-content">
							<a href="#">PRF</a>
							<a href="#">Job Vacancies & Schedule</a>
							<a href="#">Onboarding & Turnaround</a>
						</div>
					</li>
					
					<li><a href="#">Events and Trainings</a></li>
					
					<li class = "dropdown"><a href="#" class="dropbtn">Leaves</a>
						<div class = "dropdown-content">
							<a href = "#">Leaves Balance</a>
							<a href = "#">Leaves Application Form</a>
							<a href = "#">Leaves Applications</a>
						</div>
					</li>
					
					<li><a href="#">Clearance</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<style>
		table	{
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		
		td, th	{
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even)	{
			background-color: #dddddd;
		}
	</style>
	
	<?php
		$servername = "localhost"; 
		$employeeNum = "EmployeeNum";
		$LastName = "LastName"; 
		$FirstName = "FirstName"; 
		$Position = "Position"; 
		$dbName = "bostik";
		$dbUser = "root"; 
		$dbPass = ""; 
		
		$conn = new mysqli($servername, $dbUser, $dbPass, $dbName);
		
		if ($conn->connect_error)	{
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM employee";
		$result = $conn->query($sql);

		if ($result->num_rows > 0)	{
			echo "<table><tr><th>EmployeeNum</th><th>Name</th><th>Postion</th></tr>";
				// output data of each row
				while ($row = $result->fetch_assoc())	{
					echo "<tr><td>" . $row["EmployeeNum"]. "</td><td>" ." ". $row["FirstName"]. " " . $row["LastName"]. " </td><td>"." ". $row["Position"]. "</td></tr>";
				}
			echo "</table>";
		}
		else	{
			echo "0 results.";
		}
		$conn->close();
	?>

	<footer class="container-fluid text-center">
		<p>
			Bostik Philippines, Inc. <br>
			Address <br>
			Telephone Number<br>
			E-mail Address<br>
			All Rights Reserved
		</p>
	</footer>
</body>
</html>