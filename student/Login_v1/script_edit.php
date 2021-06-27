<?php
  require 'includes/common.php';
  session_start();
?>

<?php
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $class = mysqli_real_escape_string($con,$_POST['class']); 
    $rollno = mysqli_real_escape_string($con,$_POST['rollno']);


      $insert_query = "update students set name='$name',phone='$phone',class='$class',rollno='$rollno'";
    
    $user_registration_submit = mysqli_query($con,$insert_query) or die(mysqli_error($con));

    header('location: student.php');

  

?>