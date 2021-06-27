   <?php require("head.php");?>
		<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
				<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">CONTACT ADMIN</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb"></ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php require("includes/common.php");
						$query = "SELECT * FROM students WHERE email ='" . $_SESSION['email'] . "' ";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
  		?>
					<div class="container">
					<div class="col-xl-8" style="border: solid 1px #b0b0b773; background-color:#b0b0b773; ">
	
	  
	  <form action="feedback.php" method="post">
<h1 class="pageheader-title">If you have specific question, please write</h1>	  
	  <br>
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" name="name" readonly class="form-control" value="<?php echo $row['name'];?>" id="email">
  </div>
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="email" name="email" readonly class="form-control"value="<?php echo $row['email'];?>" id="email">
  </div>
  <div class="form-group">
    <label for="email">Phone no.:</label>
    <input type="number" name="num" readonly value="<?php echo $row['phone'];?>" class="form-control" id="email">
  </div>
  <div class="form-group">
			<textarea placeholder="Additional comments" name="comments" style="width:100%;height:50px;" required=""></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
	</div>
	</div>
	<BR>
		<h3> SEND THROUGH MAIL
		</h3><BR>
			<div class="container">
			 <iframe src="mail.php" class="col-xl-8" WIDTH="100%" height="600px"></iframe>
</div>			
					
         </div>
		
		</div>
		</div>
        
   <?php require("foot.php");?>