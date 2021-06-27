   <?php require("head.php");?>
		<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
				<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">MESSAGE TO TEACHER</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb"></ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php require("includes/common.php");
						$query = "SELECT * FROM teachers WHERE class=(SELECT class FROM students WHERE email ='" . $_SESSION['email'] . "' ) ";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
  		?>
		<div class="container">
					<div class="col-xl-9" style="border: solid 1px #b0b0b773; background-color:#b0b0b773; ">
	
	  
	  <form action="#" method="post">
<h1 class="pageheader-title"></h1>	  
	  <br>
  <div class="form-group">
    <label for="email">From:</label>
    <input readonly name="name" class="form-control"  value="<?php echo $_SESSION['email']; ?>" id="email">
  </div>
  <div class="form-group">
    <label for="email">To :</label>
    <input readonly name="email" class="form-control"value="<?php echo $row['email']; ?>" id="email">
  </div>
  <div class="form-group">
  <label for="comments">Message:</label>
			<textarea placeholder="Message Body... " name="comments" style="width:100%;height:200px;" required=""></textarea>
</div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<br>
	</div>
	</div>
	<?php

if(isset($_POST['submit'])){
    $message = mysqli_real_escape_string($con,$_POST['comments']);
    $insert_query = "INSERT INTO messages(msg_from,from_mail,msg_to,to_mail,message) VALUES('student','".$_SESSION['email']."','teacher','".$row['email']."','".$message."')";
    
    $user_registration_submit = mysqli_query($con,$insert_query) or die(mysqli_error($con));
echo '<script>alert("Message sent successfully.");</script>';

}


?>  
		<br><h3>SEND THROUGH MAIL</h3><br>  
					<div class="container">
					<div  style="border: solid 0px #b0b0b773;">
	  <iframe src="mail.php?tmail=<?php echo $row['email']; ?>" width="100%" height="600px"></iframe>
<br>
	</div>
	</div>
					
					
         </div>
		
		</div>
		</div>
        
   <?php require("foot.php");?>