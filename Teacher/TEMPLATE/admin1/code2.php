<?php
include('security.php');
$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);


if(isset($_POST['about_savebtn']))
{

    $title = $_POST['title'];
    $url = $_POST['url'];

    $query = "INSERT INTO about (title,url) VALUES ('$title','$url')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success']= "About us added";
        header('Location: abouts.php');
    }else{
        $_SESSION['success']= "About us not added";
        header('Location: abouts.php');
    }



}


if(isset($_POST['update_btn']))
{
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $url = $_POST['edit_url'];
    

    $query = "UPDATE about SET title='$title',url='$url' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: abouts.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: abouts.php'); 
    }
}


if(isset($_POST['deletebtn']))
{
    $id = $_POST['delete_iid'];

    $query = "DELETE FROM about WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: abouts.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: abouts.php'); 
    }    
}



?>

