<?php
	session_start();
	if (isset($_SESSION['email'])) {
	    header('location: student.php');}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot password</title>
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
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<!--===============================================================================================-->
</head>
<body>
	
		  	
	
	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>


				<form class="login100-form validate-form" method="post" action="script_recover_email.php">
					<span class="login100-form-title ">
						Forgot Password
						<div class="bg-info text-white px-5" style="font-size: 13px; font-family: 'Roboto Slab', serif; border-radius: 30px; margin-top: 20px;">
							Please enter your e-mail address. 
						</div>
					</span>
				
		
					

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: john@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

						
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Send mail
						</button>
					</div><br>
					<br>
					<div>	
						<?php
   						 	if($_GET){

   						 	?>
   						 	<div class="bg-danger text-white px-4" style="border-radius: 30px; ">
   						 	<?php 
       						 echo $_GET['msg']; 
       						 ?>
       						 </div>
       						 <?php     
   							}
  						?>
  					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="signin.php">
							Already Regitered? LOGIN
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
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