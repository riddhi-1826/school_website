<?php
  session_start();
    include('includes/common.php');
  $id = $_GET["id"];
  $error=0;

 if($_SERVER["REQUEST_METHOD"] == "POST")  {
  
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $class = $_POST["class"];
  $teacher_id =$_POST["teacher_id"];
}
 
  if($error==0){
  $query="UPDATE teachers set name='$name',email='$email',phone='$phone',class='$class',teacher_id='$teacher_id' where id='$id'";
  $query1=mysqli_query($con,$query)or die("Database Error!! Updation Failed.");
    
    header('location: teacher.php');
    echo '<script language="javascript"> alert("Updated Successful."); </script>';
}
    
?>