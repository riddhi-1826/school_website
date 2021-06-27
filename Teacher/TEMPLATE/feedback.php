<?php
  session_start();
    include('includes/common.php');
  $id = $_GET["id"];

if($_SERVER["REQUEST_METHOD"] == "POST")  {
$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$num = $_POST['num'];

}


$query = mysqli_query($con, "INSERT INTO `teacher_poll`( `name`, `email`, `phone`, `suggestions`) VALUES ('$name','$email','$num','$comments')");

echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
?>