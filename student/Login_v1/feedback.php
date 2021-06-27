<?php 
session_start();
require("includes/common.php");


$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$num = $_POST['num'];


$query = mysqli_query($con, "INSERT INTO `poll`( `name`, `email`, `phone`, `suggestions`) VALUES ('$name','$email','$num','$comments')");
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';


?>