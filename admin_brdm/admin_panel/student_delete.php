<?php
	 session_start();

	require("../admin_login/includes/common.php");
 	$id = $_GET['id'];
 	// sql to delete a record
	$sql = "DELETE FROM students WHERE id= $id";
	$result = mysqli_query($con, $sql)or die($mysqli_error($con));
	
	// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
	if ($result) {
  		// $msg = "Please enter correct E-mail id and Password";
 		 header('location: view_students.php');
	} 
	else {  
 	 	// $row = mysqli_fetch_array($result);
  		// $_SESSION['email'] = $row['email'];
  		// header('location: ../admin_panel/admin.php');
		echo "cannot delete";
	}
?>