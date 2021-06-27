<?php
	session_start();
	if (!(isset($_SESSION['email']))) {
    header('location: index.php');
	    }
require("includes/common.php");
						$query = "SELECT * FROM students WHERE email ='" . $_SESSION['email'] . "' ";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);

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
	
		  	
	
	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>


				<form class="login100-form validate-form" method="post" action="script_edit.php">
					<span class="login100-form-title ">
						Update Profile
					</span>
				
					<div>	
						<?php
   						 	if($_GET){

   						 	?>
   						 	<div class="bg-danger text-white px-4" style="border-radius: 50px;">
   						 	<?php 
								echo "!!! ";
       						 echo $_GET['msg']; 
       						 ?>
       						 </div>
       						 <?php     
   							}
  						?>
  					</div>
					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="name" value="<?php echo $row['name'];?>" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid phone number is required">
						<input class="input100" type="number" name="phone" value="<?php echo $row['phone'];?>" placeholder="Phone No">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: john@abc.xyz">
						<input class="input100" type="blocked" value="<?php echo $row['email'];?>" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

						<div class="wrap-input100 validate-input" data-validate = "Class is required">
						<input class="input100" type="number" value="<?php echo $row['class'];?>" name="class" min="1" max="12" placeholder="Class (1 to 12)">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book-o" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Roll No. is required">
						<input class="input100" type="text" value="<?php echo $row['rollno'];?>" name="rollno" placeholder="Roll No.">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-file-code-o" aria-hidden="true"></i>
						</span>
					</div>
				
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Update
						</button>
					</div><br>			
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