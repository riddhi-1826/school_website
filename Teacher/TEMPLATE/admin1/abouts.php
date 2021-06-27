<?php
include('include/header.php'); 
include('include/navbar.php');
include('database/dbconfig.php');
?>




<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <!-- Launch demo modal -->
</button> -->

<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make changes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="code2.php" method="POST">

<div class="modal-body">

    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label>Url</label>
        <input type="text" name="url" class="form-control" placeholder="Enter Url">
    </div>

    
    
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" name="about_savebtn" class="btn btn-primary">Save</button>
</div>
</form>
      </div>
      
    </div>
  </div>
</div>


<div class="container">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add About 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add
            </button>
    </h6>
  </div>

  <div class="card-body">


    <div class="table-responsive">

    <?php

        $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

        $query = "SELECT * FROM about";
        $query_run = mysqli_query($connection, $query);
        
    ?>

    
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th> ID </th>
              <th> Title</th>
              <th> Url </th>
              <th>EDIT</th>
              <th>DELETE</th>
          </tr>
        </thead>

        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>
            <td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['title']; ?></td>
            <td><?php  echo $row['url']; ?></td>
            
            <td>
                <form action="abouts_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="editabout_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code2.php" method="post">
                  <input type="hidden" name="delete_iid" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="deletebtn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
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
<!-- /.container-fluid -->

