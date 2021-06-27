<?php
  require 'includes/common.php';
  session_start();
?>

<?php
if( !function_exists('random_bytes') )
{
    function random_bytes($length = 6)
    {
        $characters = '0123456789';
        $characters_length = strlen($characters);
        $output = '';
        for ($i = 0; $i < $length; $i++)
            $output .= $characters[rand(0, $characters_length - 1)];

        return $output;
    }
}

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $class = mysqli_real_escape_string($con,$_POST['class']); 
    $rollno = mysqli_real_escape_string($con,$_POST['rollno']);
    $pass = md5(mysqli_real_escape_string($con,$_POST['pass']));
    $cpass = md5(mysqli_real_escape_string($con,$_POST['cpass']));
    $token = bin2hex(random_bytes(15));
    // echo $phone ."<br>". $email ."<br>". $class ."<br>". $rollno ."<br>". $pass ."<br>";
    // die(print($name));
	$sql_query = "SELECT * FROM students WHERE email = '$email'";
    $result = mysqli_query($con, $sql_query)or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
  
    if ($num != 0) {
      $msg = "This email id is already registered.";
      header('location: signup.php?msg='. $msg);
      // header('location: signup.php?m1=' . $m)
    } 
    else  {
      $insert_query = "INSERT INTO students(name,phone,email,class,rollno,pass,cpass,token) VALUES('$name','$phone','$email','$class','$rollno','$pass','$cpass','$token')";
    
    $user_registration_submit = mysqli_query($con,$insert_query) or die(mysqli_error($con));
    
    // echo 'successfully registered';
    // $_SESSION['id']= mysqli_insert_id($con);
    $msg = "You have successfully regitered. Please login to continue...";
    header('location: signin.php?msg=' . $msg);
    // header('location:index.php');
  }

?>