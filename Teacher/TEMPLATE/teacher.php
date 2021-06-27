<?php
    session_start();
	include('includes/common.php');
	include('includes/header.php');
    include('includes/navbar.php');
?>
 <!doctype html>
<html lang="en">
<head>
<title>DASHBOARD</title>
</head>
<?php 
$id=$_SESSION['id'];
$sql = "SELECT * FROM teachers WHERE id='$id'";
$result = mysqli_query($con,$sql) or die (mysqli_error());
 $row= mysqli_fetch_array($result);

 ?>
 <div style="width:300px; margin-left: 0px;">
    <h3>YOUR PROFILE </h3>
    
     
 </div>
 <hr style="margin-left: 0px;">
 
<div class="card-columns">
<div class="card" style="width:300px; margin-left: 0px;">
  <img class="card-img-top" src="images/img-03.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['name'];?></h4>
    
    <a href="edit_profile.php?id=<?php echo $id;?>" class="btn btn-primary">Edit Profile</a>
    <a href="logout.php
    " class="btn btn-danger">Logout</a>
  </div>
</div>
<div class="card"style="margin-top: 100px; margin-left: 130px;">
  <div class="card-body">
      <strong>Name:</strong><?php echo $row['name']; ?><br>
      <strong>Email:</strong><?php echo $row['email']; ?><br>
      <strong>Class:</strong><?php echo $row['class']; ?><br>
      <strong>Phone Number:</strong><?php echo $row['phone']; ?><br>
      <strong>ID:</strong><?php echo $row['teacher_id']; ?>
  </div>
</div>
</div>
 <?php
    include('includes/script.php');
?>       

