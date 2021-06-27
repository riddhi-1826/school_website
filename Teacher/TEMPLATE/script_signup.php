<?php
  require 'includes/common.php';
  session_start();
?>

<?php

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $class = mysqli_real_escape_string($con,$_POST['class']); 
    $teacher_id = mysqli_real_escape_string($con,$_POST['teacher_id']);
    $pass = md5(mysqli_real_escape_string($con,$_POST['pass']));
    $cpass = md5(mysqli_real_escape_string($con,$_POST['cpass']));
    $token = bin2hex(random_bytes(15));
    // echo $phone ."<br>". $email ."<br>". $class ."<br>". $teacher_id."<br>". $pass ."<br>";
    // die(print($name));

    $sql_query = "SELECT * FROM teachers WHERE email = '$email'";
    $result = mysqli_query($con, $sql_query) or die(mysqli_error($con));
    $num = mysqli_num_rows($result);
    
    if ($num != 0) {
      $msg = "This email id is already registered.";
      header('location: signup.php?msg='. $msg);
      // header('location: signup.php?m1=' . $m)
    }

    else  {

    $sql_query = "SELECT * FROM teachers WHERE teacher_id = '$teacher_id'";
    $result = mysqli_query($con, $sql_query) or die(mysqli_error($con));
    $num = mysqli_num_rows($result);
  
    if ($num != 0) {
      $msg = "This id is already registered.";
      header('location: signup.php?msg='. $msg);
      // header('location: signup.php?m1=' . $m)
    }
    else{
          $insert_query = "INSERT INTO teachers(name,phone,email,class,teacher_id,pass,cpass,token) VALUES('$name','$phone','$email','$class','$teacher_id','$pass','$cpass','$token')";
    
          $user_registration_submit = mysqli_query($con,$insert_query) or die(mysqli_error($con));
          
          // echo 'successfully registered';
          // $_SESSION['id']= mysqli_insert_id($con);
          $msg = "You have successfully regitered. Please login to continue...";
          header('location: signin.php?msg=' . $msg);
    }

    // header('location:index.php');
  }

?>