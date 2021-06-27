<?php
  require 'includes/common.php';
  session_start();
?>

<?php

   
    $email = mysqli_real_escape_string($con,$_POST['email']);
   
    // echo $phone ."<br>". $email ."<br>". $class ."<br>". $rollno ."<br>". $pass ."<br>";
    // die(print($name));

    $sql_query = "SELECT * FROM students WHERE email = '$email'";
    $result = mysqli_query($con, $sql_query)or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
  
    if ($num != 0) {
          $student_data = mysqli_fetch_array($result);
          $name = $student_data['name'];
          $token = $student_data['token'];

          $subject  = "Password Reset";
          $body  = "Hi, ".$name.". Click here to reset your password   http://localhost/Login_v1%20(2)/reset_password.php?token=".$token." ";
          $sender_email  = 'From: sender_email_id@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
          if(mail($email, $subject, $body, $sender_email)) { 
                $msg =" We have sent you an email with a password reset link. Please click on that link to create a new password for your account.";
              header('location:recover_email.php?msg=' . $msg);

          }
          else { 
                   echo "Email sending failed...";
          }
    } 
    else  {
     
              $msg = "This email id is not registered ..... ";
              header('location:recover_email.php?msg=' . $msg);
    // echo 'successfully registered';
    // $_SESSION['id']= mysqli_insert_id($con);
    // $_SESSION['msg2'] = "You have successfully regitered. Please login to continue...";
    // header('location: signin.php');
    // header('location:index.php');
  }

?>