<?php
  require 'includes/common.php';
  session_start();
  
?>

<?php
  

      
        $pass = (mysqli_real_escape_string($con,$_POST['pass']));
      
        $currentpass = (mysqli_real_escape_string($con,$_POST['currentpass']));

        $sql_check = "SELECT email,pass FROM admin WHERE pass = '$currentpass' ";
        $check_result = mysqli_query($con, $sql_check) or die($mysqli_error($con));
        $num = mysqli_num_rows($check_result);
        if($num == 0) {
           $msg = "Current password is incorrect!";
              header('location: reset_password.php?msg=' . $msg);

          # code...
        }
        else{
           $sql_query = " UPDATE admin SET pass = '$pass'";
          $result = mysqli_query($con, $sql_query)or die($mysqli_error($con));
    
        if($result){
              $msg = "You have successfully updated your password. Please login to continue...";
              header('location: ../admin_panel/admin.php?msg=' . $msg);
         }
           else {
              $msg = "Cannot update. Please try again...";
              header('location: reset_password.php?msg=' . $msg);
         } 

        }

          
    // echo 'successfully registered';
    // $_SESSION['id']= mysqli_insert_id($con);
    // $_SESSION['msg2'] = "You have successfully regitered. Please login to continue...";
    // header('location: signin.php');
    // header('location:index.php');
 
?>