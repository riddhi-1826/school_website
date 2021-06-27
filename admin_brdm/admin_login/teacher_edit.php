 <?php
	session_start();
	if (!isset($_SESSION['email'])) {
    header('location: signin.php');}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
	// session_start();

	require("includes/common.php");
 	$id = $_GET['id'];
 	// sql to delete a record
	$sql = "SELECT * FROM teachers WHERE id= $id";
	$result = mysqli_query($con, $sql)or die($mysqli_error($con));
	
	// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
	$teach = mysqli_fetch_array($result);

?>
	
		  	
	
	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<?php
					$id = $_GET['id'];
				?>
				<form class="login100-form validate-form" method="post" action="script_teacher_edit.php?id=<?php echo $id;?>">
					<span class="login100-form-title ">
						Edit Teacher
					</span>
				
		
					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" placeholder="Name" value="<?php echo $teach['name']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid phone number is required">
						<input class="input100" type="number" name="phone" placeholder="Phone No" value="<?php echo $teach['phone']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile" aria-hidden="true"></i>
						</span>
					</div>

				<!-- 	<div class="wrap-input100 validate-input" data-validate = "Valid email is required: john@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" value="<?php echo $student['email']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div> -->

						<div class="wrap-input100 validate-input" data-validate = "Class is required">
						<input class="input100" type="text" name="class" placeholder="Class" value="<?php echo $teach['class']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Teacher id is required">
						<input class="input100" type="text" name="t_id" placeholder="Teacher ID" value="<?php echo $teach['teacher_id']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-file-code-o" aria-hidden="true"></i>
						</span>
					</div>

<!-- 
					<div class="wrap-input100 validate-input" data-validate = "Minimum 8 characters, at least 1 uppercase, 1 lowercase, 1 number and 1 special character is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password not matched">
						<input class="input100" type="password" name="cpass" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-tags" aria-hidden="true"></i>
						</span>
					</div> -->
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Update Teacher
						</button>
					</div><br>
					<br>
					<!-- <div>	
						<?php
   						 	if($_GET){

   						 	?>
   						 	<div class="bg-danger text-white px-4" style="border-radius: 50px;">
   						 	<?php 
       						 echo $_GET['id']; 
       						 ?>
       						 </div>
       						 <?php     
   							}
  						?>
  					</div> -->

					<div class="text-center p-t-136">
						<a class="txt2" href="../admin_panel/view_teachers.php">
							GO BACK
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>