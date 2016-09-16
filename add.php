<?php

	$username = $_SESSION['USER'];
	
	if ($_POST['save'])	{
		
		$firstName = $_POST['firstName'];
		$middleName = $_POST['middleName'];
		$lastName = $_POST['lastName'];
		$emailAdd = $_POST['emailAdd'];
		
		$position = $_POST['postion'];
		$status = $_POST['status'];
		$dateHired = $_POST['dateHired'];
		$regularznDate = $_POST['regularznDate'];
		
		$query1 = mysqli_query($link, " SELECT COUNT (*) AS rowCount FROM employee");
		$row1 = mysqli_fetch_array($query1);
		$rowCount = $row1['rowCount'];
		
		$pos = $positon;
		
		if ($rowCount == 0)	{
			
			$countCode = '001';
		}
		else 	{
			
			$query2 = mysqli_query($link, "SELECT number FROM employee WHERE prefix LIKE '%des' ORDER BY number DESC LIMIT 1");
			$row2 = mysqli_fetch_array($query2);
			$userNameCode = $row2['number'];
			
			$int = (int)$userNameCode;
			$finalCode=++int;
			
				if	($finalCode<10)	{
					$finalCode='00'.$finalCode;
				}
				else if	{
					$finalCode='0'.$finalCode;
				}
				
		}
		
		$userNameDesig=$des.'-'.$finalCode;
		
		$position = $_POST['position'];
		$department = $_POST['department'];
		$address = $_POST['address'];
		$birthday = $_POST['birthday'];
			$birthDate = explode("-", $birthday);
			$currentYear= date ('Y');
			$split_birthday = split("-", $birthday);
			$year = $split_birthday[0];
		$age = $currentYear-$year;
		
		$sex = $_POST['sex'];
		$religion = $_POST['religion'];
		$citizenship = $_POST['citizenship'];
		
		$birthPlace = $_POST['birthPlace'];
		
		$fatherName = $_POST['fatherName'];
		$motherName = $_POST['motherName'];
		$fatherBirthday = $_POST['fatherBirthday'];
		$motherBirthday = $_POST['motherBirthday'];
		
		
		
		
		
	}
?>