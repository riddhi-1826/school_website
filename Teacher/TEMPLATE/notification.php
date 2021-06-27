<?php
    session_start();
	include('includes/common.php');
	include('includes/header.php');
    include('includes/navbar.php');

$id=$_SESSION['id'];
$sql = "SELECT class FROM teachers WHERE id='$id'";
$result = mysqli_query($con,$sql) or die (mysqli_error());
 $row= mysqli_fetch_array($result);
if ( isset($_POST['cancel']) ) {
    header('Location: teacher.php');
    return;
}
// Check to see if we have some POST data, if we do process it
if (isset($_POST['notif'])) 
{
    if (strlen($_POST['notif']) > 1 )
    {

    $notif = htmlentities($_POST['notif']);

    $query="INSERT notif set notif='$notif',class='$row[class]'";
  $query1=mysqli_query($con,$query)or die("Database Error!! Updation Failed.");
    
 
    }
}

?>
<!doctype html>
<html lang="en">
<head>
<title>NOTIFICATION</title>
</head>
<h1 style="margin-left: 0px;">Send Notification</h1>
<hr style="margin-left: 0px;">
<!-- <div class="card"  style="margin-left: 300px;">
  <div class="card-body">
    
    <div class="container">
            
            <form method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="notif"><strong>Notification:</strong></label>
                    <div class="col-sm-5">
                    <textarea lass="form-control" name="notif" id="notif" rows="4" cols="50" style="width:100%;height:200px;border:solid 1px #e1e1d0;margin-bottom: 10px;"> </textarea>
                        <div class=" col-sm-offset-2">
                        <input class="btn btn-primary" type="submit" value="Save">
                        <input class="btn" type="submit" name="cancel" value="Cancel">
                        </div>
                    </div>
                </div>
            </form>

           </div>
  </div>
</div> -->


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
    <input readonly name="email" class="form-control"value="<?php echo "My class students"; ?>"  id="email">
  </div>
  <div class="form-group">
  <label for="comments">Message:</label>
            <textarea placeholder="Message Body... " name="notif" style="width:100%;height:200px;" required=""></textarea>
</div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<br>
    </div>
    </div>
</div>
</div>
</div>
   <?php
    include('includes/script.php');
?>     