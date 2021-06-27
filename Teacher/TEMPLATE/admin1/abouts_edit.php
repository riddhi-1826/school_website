<?php
include('include/header.php'); 
include('include/navbar.php'); 
include('database/dbconfig.php');
?>


<div class="container">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['editabout_btn']))
{
    $id = $_POST['edit_id'];

    $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
    
    $query = "SELECT * FROM about WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="code2.php" method="POST">
                
              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
              
              <div class="form-group">
                  <label> Title </label>
                  <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" class="form-control" placeholder="Enter Title">
              </div>
              <div class="form-group">
                  <label> URl</label>
                  <input type="text" name="edit_url" value="<?php echo $row['url'] ?>" class="form-control" placeholder="Enter Title">
              </div>

              <a href="abouts.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="update_btn" class="btn btn-primary"> Update </button>

          </form>
    <?php
    }
}
?>
  </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include('include/scripts.php');
?>