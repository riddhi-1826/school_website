<?php
	session_start();

	require("includes/common.php");
 	$email= mysqli_real_escape_string($con,$_POST['email']);
 	$pass=md5(mysqli_real_escape_string($con,$_POST['passlogin']));

	// Query checks if the email and password are present in the database.
	$query = "SELECT id, email, name FROM teachers WHERE email ='" . $email . "' AND pass ='" . $pass . "'";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));
	$num = mysqli_num_rows($result);
	// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
	if ($num == 0) {
  		$msg = "Please enter correct E-mail id and Password";
 		 header('location: signin.php?msg=' . $msg);

	} 
	else {  
 	 	$row = mysqli_fetch_array($result);
  		$_SESSION['email'] = $row['email'];
  		$_SESSION['id'] = $row['id'];
  		$_SESSION['name'] = $row['name'];
  		header('location: teacher.php');

	}

	?>

