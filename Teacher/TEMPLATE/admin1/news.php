<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news</title>

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .content {
            width: 450px;
            margin: 20px auto;
            box-shadow: 1px 1px 10px 1px #888888;
            border: 2px solid white;
            border-radius: 20px;

        }

        .header {
            text-align: center;
            background-color: orange;
            color: white;
            padding: 20px;
            /* border-radius: 10px 10px;  */

        }

        .moving {
            text-align: center;
            color: green;

        }
        h6{
            padding:10px
        }
       
        
        
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="content">
        <h1>
            <div class="header">Notifications</div>
        </h1>
        <div class="moving">
            <marquee width="70%" direction="up" height="400px">
                <?php
                include('database/dbconfig.php');
                // include('admin1/include/header.php');
                

                
                

                $query = "SELECT * FROM about";
                $query_run = mysqli_query($connection, $query);
                $check_about = mysqli_num_rows($query_run) > 0;

            

                if($check_about){

                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>

                <div class="text-center">
                    

                    
                <h6><a class="text-warning" href="<?php echo $row['url'];?>">
            
                <?php echo $row['title'];?>
            </a></h6>

                    
                </div>


                <?php
                    }
                    

                }
                


                else{
                    echo "no record found";
                }

                ?>
            </marquee>

        </div>

    </div>

</body>

</html>