<?php
	/* Employee Logging In */
	
	$empNum = mysqli_real_escape_string($link, $_POST['username']);
	$pword = mysqli_real_escape_string($link, $_POST['password']);
	
	//The use of username is temporarily stated while Bostik makes clear whether which to use
	
	//If statements to check if there is input from user
	if(!$empNum)	{
	
		$_SESSION['ERROR_MESSAGE'] = "<p>Please enter a valid or existing employee number.<b>You may contact the System Admin or an HR Personnel for assistance.</p>";
		
		$_SESSION['MESSAGE_DISPLAYED'] = 0;
		
		die(header("Location:loginattempt.php")); /* <-- create this lol */
	}
	
	if(!$pword)	{
		
		$_SESSION['ERROR_MESSAGE'] = "<p>Please enter the password for your account.<b>You may contact the System Admin or an HR Personnel for assitance.</p>";
		
		$_SESSION['MESSAGE_DISPLAYED'] = 0;
		
		die(header("Location:loginattempt.php")); /* <-- create this lol */
	}
	
	//SQL statements
	$search = "SELECT * FROM employee WHERE empNum = '".$empNum."'";
	$result = mysqli_query($link, $search);
	
	if (mysqli_num_rows($result) == 1)	{
		
		$row = mysqli_fetch_array($result);
		
		/* question: should we use an MD5 hash? */
		
	
		
		//If statements to check for empNum and pword mismatch
		if ($pword == $row['pword'])	{
			
			$position = $row['position'];
			// ^ tags the position of the user for access to the database
			
			$_SESSION['USER'] = $empNum;
			$_SESSION['LOG'] = "YES";
			
			header("Location:home.php"); /* <-- create this lol */
			
		}
		else	{
			
			$_SESSION['ERROR_MESSAGE'] = "<p>The password you entered is incorrect.<BR>Kindly try again.</p>";
			$_SESSION['MESSAGE_DISPLAYED'] = 0;
			
			die(header("Location:loginattempt.php"));
		}
	}
	else	{
		
		$_SESSION['ERROR_MESSAGE'] = "<p>The Employee Number does not exist.</p>";
		$_SESSION['MESSAGE_DISPLAYED'] = 0;
		
		die(header("Location:loginattempt.php"));
	}
	
	//clean-up cache para masaya
	ob_end_flush();
	ob_end_clean();
	
	//close the query para mas masaya
	mysqli_close($link);
	
?>