<?php
    session_start();
	include('includes/common.php');
	include('includes/header.php');
    include('includes/navbar.php');

	$id=$_SESSION['id'];
	$sql="SELECT * FROM teachers WHERE id='$id'";
    $result = mysqli_query ($con,$sql) or die (mysqli_error ());
   	$row= mysqli_fetch_array($result);
?>
 <!doctype html>
<html lang="en">
<head>
<title>Edit Profile</title>
</head>
<form style="margin-left: 0px; margin-top: 10px;" method="POST" action="update.php?id=<?php echo $_SESSION['id']; ?>" >
	
  <div class="form-group">
    <label for="formGroupExampleInput"><strong>Name</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="<?php echo $row['name']; ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Email</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="email" value="<?php echo $row['email']; ?> " >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Phone No.</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="phone" value="<?php echo $row['phone']; ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>Class</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="class" value="<?php echo $row['class']; ?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"><strong>ID</strong></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="teacher_id" value="<?php echo $row['teacher_id']; ?>">
  </div>
  <input type="submit" class="btn btn-primary" name= "submit" value="Update" >
  <!-- <button type="button" na class="btn btn-primary">Update</button> -->
          
</form>

 <?php
    include('includes/script.php');
?>  