<?php
    session_start();
	include('includes/common.php');
	include('includes/header.php');
    include('includes/navbar.php');
?>
 <!doctype html>
<html lang="en">
<head>
<title>CONTACT ADMIN</title>
</head>

<div style="margin-left: 0px;">
	<h3>Contact Admin</h3>
</div>
<hr style="margin-left: 0px;">  

<div class="card" style="margin:10px 50px 10px 0px;">
  <div class="card-body" >

  	
      <?php
            $query = "SELECT * FROM teachers WHERE email ='" . $_SESSION['email'] . "' ";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $row = mysqli_fetch_array($result);
      ?>
  	<form action="feedback.php" method="post" >
<h1 class="pageheader-title">If you have specific question, please write</h1>	  
	  <br>
  <div>
    <label for="email">Name:</label>
    <input readonly type="text" name="name" class="form-control" value="<?php echo $row['name'];?>"  id="email">
  </div>
  <div >
    <label for="email">Email :</label>
    <input readonly type="email" name="email" class="form-control" value="<?php echo $row['email'];?>" id="email">
  </div>
  <div >
    <label for="email">Phone no.:</label>
    <input readonly type="number" name="num"  class="form-control" value="<?php echo $row['phone'];?>" id="email">
  </div>
  <div >
    <label for="email">Your Query:</label>
			<textarea placeholder="" name="comments" style="width:100%;height:50px;border:solid 1px #e1e1d0;margin-bottom: 10px;" required="" ></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>
</div>
 <?php
    include('includes/script.php');
?>