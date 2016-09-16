<!DOCTYPE html>
<html lang = "en-US">
<head>
	<title>Bostik PH HRIS</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			<!-- Remove the navbar's default rounded borders and increase the bottom margin -->
			.navbar {
				margin-bottom: 50px;
				border-radius: 0;
			}
			
			<!-- Remove the jumbotron's default bottom margin -->
			.jumbotron {
				margin-bottom: 0;
			}
		   
			<!-- Add a gray background color and some padding to the footer -->
			footer {
				background-color: #f2f2f2;
				padding: 25px;
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
	
	<br>
	<br>
	
	<center>
	<form method="post" action="login.php">
		Username:
		<br/>
		<input type="text" name="username">
		<br/>
		Password:
		<br/>
		<input type="password" name="password">
		<br/>
		<input type="submit" value="Login!">
	</form>
	</center>
</body>
</html>
