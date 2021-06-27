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
<title>TEACHER PANEL</title>
</head>
<div class="card shadow mb-4" style="margin-left: 0px;">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> My class students messages </h6>
  </div>
  <div class="card-body">
   <?php
            require 'includes/common.php';

            $stu_query = "SELECT time, message FROM messages WHERE msg_from = 'student' AND msg_to = 'teacher' AND to_mail ='" . $_SESSION['email'] . "'  ";
            $stu_res = mysqli_query($con,$stu_query);
            $num = mysqli_num_rows($stu_res);

          ?>
            <?php
                if($num == 0)  {
                 echo " <div class='  container text-center badge-info px-4 text-white' style='font-weight: bolder; font-size: 30px; width: 100%;' > No message from students...</div>"; 
                }
                else  { 
                ?>
               <!--  <div class=" container text-center badge-info px-4 text-white" style="font-weight: bolder; font-size: 30px; width: 100%"> ADMIN MESSAGES...</div> -->
              
                <label for="search" style="float: right; font-weight: bold; color: red; font-size: 20px;">SEARCH : </label>
                <div align="center" style="width: 20%; float: right; margin-right: 10px; ">
                    <input type="text" name="search" id="search" class="form-control">
                </div>
                <br><br>
                <div class="table-responsive">
                <table class="table table-bordered  table-light" id="student_table" style="margin-top: 20px">
                    <thead>
                        <tr class="badge-info text-white">
                            <th> ID</th>
                            <th>MESSAGE</th>
                            <th>TIME</th>
                            <!-- <th>STUDENT TIMESTAMP</th>
                            <th>STUDENT MESSAGE</th> -->
                            
                            <!-- <th>Student edit</th>
                            <th>student delete</th> -->

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 0;
                            while($student = mysqli_fetch_array($stu_res))
                            {
                             
                        ?>

                        <tr class="badge-active">
                            <td><?php echo ++$count; ?></td>
                            <td><?php echo $student['message']; ?></td>
                            <td><?php echo $student['time']; ?></td>
                            <!-- <td><?php echo $student['timestamp']; ?></td>
                            <td><?php echo $student['suggestions']; ?></td> -->
                           <!--  <td><?php echo $student['phone']; ?></td>
                            <td><a href="../admin_login/student_edit.php?id=<?php echo $student['id']; ?>" class="btn btn-success">EDIT</a></td>
                            <td><a href="student_delete.php?id=<?php echo $student['id']; ?>" class="btn btn-danger">DELETE</a></td> -->
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
           </div>

         <?php }
         ?>
      
  
            
  </div>
</div>

</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#search').keyup(function(){
              search_table($(this).val());  
        });

    function search_table(value){
        $('#student_table tr').each(function(){
            var found = 'false';
            $(this).each(function(){
                if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                {
                    found = 'true';
                }
            });
            if(found == 'true')
            {
                $(this).show();
            }
            else
            {
                $(this).hide();
            }
        });
    }
});
</script>
 <?php
    include('includes/script.php');
?>       
