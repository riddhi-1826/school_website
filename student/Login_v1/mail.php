<?php include 'sendemail.php'; 
$tm="";
if($_GET){
$tm=$_GET['tmail']; 
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Form</title>
    <link rel="stylesheet" href="assets/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body style="background-color:#b0b0b773;">

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
      
      <div class="contact-form">
        <h1>Message Form</h1>
        <form class="contact" action="" method="post">
		  <?php if(!$tm=="") { echo "<lable><b>Details will Send to Class Teacher mail:- &#160; <code>".$tm."</code></b></lable><br><br>";} ?>
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
        
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