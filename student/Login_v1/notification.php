   <?php require("head.php");?>
		<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
				<div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">NOTIFICATION</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb"></ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="container">
					<div class="row">
						
						<div class="col">
							<div class="card">
										<div class="card-body">
										<table style="padding:15px;border:1px #b0b0b0 solid; font-size:14px;"  class="table table-bordered  table-hover">
	<thead><td>Notification</td><td>Time</td></thead>
	<?php
		require("includes/common.php");
		$query = "select * from notif where class=(SELECT class FROM students WHERE email ='" . $_SESSION['email'] . "' )";
		$result = mysqli_query($con, $query)or die($mysqli_error($con));

		$num = mysqli_num_rows($result);

		if($num==0)  {
			echo "<h1>NO NOTIFICATION FROM TEACHER</h1>";
		}
		else  {  
		while($row = mysqli_fetch_array($result))	{
		echo "<tr><td>" . $row['notif']. "</td><td>" .date("Y-m-d || h:i:sa", strtotime($row['time'])). "</td></tr>";
		}
	}
?>
	</table>
										</div>
									  </div>
						</div>
					</div>
				</div>
					
					
         </div>
		
		</div>
		</div>
        
   <?php require("foot.php");?>