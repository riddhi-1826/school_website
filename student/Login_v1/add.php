<?php

// If the user requested logout go back to index.php
if ( isset($_POST['cancel']) ) {
    header('Location: add.php');
    return;
}

try 
{
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=internship', 
   'root', '');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
    die();
}


// Check to see if we have some POST data, if we do process it
if (isset($_POST['notif'])) 
{
    if (strlen($_POST['notif']) > 1 )
    {

    $notif = htmlentities($_POST['notif']);

    $stmt = $pdo->prepare("
        INSERT INTO notif (notif)
        VALUES (:notif)
    ");

    $stmt->execute([

        ':notif' => $notif, 
    ]);

    header('Location: add.php');
    return;  
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notification</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Send Notification</h1>
            <form method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="notif">Notification:</label>
                    <div class="col-sm-5">
                    <textarea lass="form-control" name="notif" id="notif" rows="4" cols="50"> </textarea>

<div class=" col-sm-offset-2">
                        <input class="btn btn-primary" type="submit" value="Save">
                        <input class="btn" type="submit" name="cancel" value="Cancel">
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </body>
</html>