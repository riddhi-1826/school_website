<?php
  require 'includes/common.php';
   session_start();
?>

<?php
    $id = $_GET['id'];
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    // $email = mysqli_real_escape_string($con,$_POST['email']);
    $class = mysqli_real_escape_string($con,$_POST['class']); 
    $tid = mysqli_real_escape_string($con,$_POST['t_id']);
    // $pass = md5(mysqli_real_escape_string($con,$_POST['pass']));
    // $cpass = md5(mysqli_real_escape_string($con,$_POST['cpass']));
    // $token = bin2hex(random_bytes(15));
    // echo $phone ."<br>". $email ."<br>". $class ."<br>". $rollno ."<br>". $pass ."<br>";
    // die(print($name));

    // $sql_query = "SELECT * FROM students WHERE email = '$email'";
    // $result = mysqli_query($con, $sql_query)or die($mysqli_error($con));
    // $num = mysqli_num_rows($result);
  
    // if ($num != 0) {
    //   $msg = "This email id is already registered.";
    //   header('location: signup.php?msg='. $msg);
    //   // header('location: signup.php?m1=' . $m)
    // } 
    // else  {
    $update_query = "UPDATE teachers
SET name = '$name', phone= '$phone',class = '$class', teacher_id= '$tid'
WHERE id = $id";
    
    $user_registration_submit = mysqli_query($con,$update_query) or die(mysqli_error($con));
    
    // echo 'successfully registered';
    // $_SESSION['id']= mysqli_insert_id($con);
    // $msg = "You have successfully regitered. Please login to continue...";
    if($user_registration_submit){
        header('location: ../admin_panel/view_teachers.php');
    }
    else{
      echo "cannot edit";
    }
  
    // header('location:index.php');
  

?>