<?php
  require 'includes/common.php';
  session_start();
  
?>

<?php
    if(isset($_GET['t'])){

        $token = $_GET['t'];
        $pass = md5(mysqli_real_escape_string($con,$_POST['pass']));
        $cpass = md5(mysqli_real_escape_string($con,$_POST['cpass']));


           $sql_query = " UPDATE students SET pass = '$pass',cpass = '$cpass' WHERE token = '$token'";
          $result = mysqli_query($con, $sql_query)or die($mysqli_error($con));
    
        if($result){
			session_destroy();
              $msg = "You have successfully updated your password. Please login to continue...";
              header('location: signin.php?msg=' . $msg);
         }
           else {
              $msg = "Cannot update. Please try again...";
              header('location: reset_password2.php?msg=' . $msg);
         } 
    // echo 'successfully registered';
    // $_SESSION['id']= mysqli_insert_id($con);
    // $_SESSION['msg2'] = "You have successfully regitered. Please login to continue...";
    // header('location: signin.php');
    // header('location:index.php');
  }
  else{
    $msg = "Some error occurred. Please try again";
              header('location: reset_password2.php?msg=' . $msg);
  }
?>