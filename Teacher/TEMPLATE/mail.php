<?php
    include('sendmail.php');
    include('includes/header.php');
     include('includes/script.php');
if($_GET){
$tm=$_GET['tmail']; 
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>Message Form</title>
    <style >
      h1{
        text-align: center;
      }
      input{
        margin-bottom: 40px;
        margin-right: 50px;
      }
      textarea{
        width: 100%;
        margin-bottom: 20px;
      }

    </style>
    
    
  </head>
  <body style="background-color:#b0b0b773;">

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section" >
      
      <div class="contact-form">
        <h1>Message Form</h1>
        <form class="contact" action="" method="post">
		  <?php if(!$tm=="") { echo "<lable><b>Details will Send to Class Teacher mail:- &#160; <code>".$tm."</code></b></lable><br><br>";} ?>
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required><br>
        
		  <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
		  
		  <INPUT type="hidden" name="tmail" value=" <?php echo $tm; ?> ">
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>