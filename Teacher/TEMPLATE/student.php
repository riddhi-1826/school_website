<?php
    session_start();
    include('includes/common.php');
	include('includes/header.php');
    include('includes/navbar.php');
    $id=$_SESSION['id'];
?>
 <!doctype html>
<html lang="en">
<head>
<title>STUDENT</title>
</head>
<div class="card shadow mb-4" style="margin-left: 0px;">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Student in the Section </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <?php
        $query="SELECT * FROM students WHERE class = (SELECT class from teachers where id='$id') ORDER BY rollno ASC ";
        $result=mysqli_query($con,$query);
    ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Roll no </th>
              <th> Student Name</th>
              <th> Email </th>
              <th>Phone Number</th>
          </tr>
        </thead>

        <tbody>
        <?php
        if(mysqli_num_rows($result) > 0)        
        {
            while($row = mysqli_fetch_assoc($result))
            {
               ?>
          <tr>
            <td><?php  echo $row['rollno']; ?></td>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['email']; ?></td>
            <td><?php  echo $row['phone']; ?></td>
          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
      </table>
   
    </div>
  </div>
</div>

</div>
 <?php
    include('includes/script.php');
?>