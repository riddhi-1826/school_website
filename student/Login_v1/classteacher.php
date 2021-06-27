   <?php require("head.php");?>
		<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
				<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">PROFILE</h2>
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
					<div class="row">
						<div class="col">
						   <div class="card" style="width:300px">
									<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="User image" style="width:100%">
									<div class="card-body">
									  <h4 class="card-title"><?php echo " ".$row['name'];" " ?></h4>
									  <p class="card-text"><?php echo " ".$row['email'];" " ?></p>
									</div>
									</div>
						</div>
						<div class="col">
							<div class="card">
										<div class="card-body">
										  <h4 class="card-title">Name: <?php echo "&#160; ".$row['name'];?></h4>
										  <h4 class="card-title">Email: <?php echo "&#160; ".$row['email']; ?></h4>
										  <h4 class="card-title">Phone No: <?php echo "&#160; ".$row['phone']; ?></h4>
										  <h4 class="card-title">Class: <?php echo "&#160; ".$row['class']; ?></h4>
										  <h4 class="card-title">Teacher id: <?php echo "&#160; ".$row['teacher_id']; ?></h4>
										</div>
									  </div>
						</div>
					</div>
				</div>
					
					
         </div>
		
		</div>
		</div>
        
   <?php require("foot.php");?>