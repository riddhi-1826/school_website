<?php
    session_start();
	include('includes/common.php');
	include('includes/header.php');
    include('includes/navbar.php');
    include('sendmail.php');

?>
 
		<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
				<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">MESSAGE</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb"></ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
						$query = "SELECT * FROM students WHERE class=(SELECT class FROM teachers WHERE email ='" . $_SESSION['email'] . "' ) ";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
  		?>
		
					<div class="container">
					<div  style="border: solid 0px #b0b0b773;">
	
	  
	  
	  <iframe src="mail.php?tmail=<?php echo $row['email']; ?>" width="100%" height="600px"></iframe>
<br>
	</div>
	</div>
					
					
         </div>
		
		</div>
		</div>
        
   <?php
    include('includes/script.php');
?>       
