<?php 
session_start();
include("php/config.php");

if(!isset($_SESSION['valid']) || $_SESSION['role'] != 'admin'){
    header("Location: index.php");
    exit();
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    mysqli_select_db($con, "login-register");
    $delete_query = mysqli_query($con, "DELETE FROM tracks WHERE id=$id") or die("Error deleting track");

    if($delete_query){
        header("Location: home.php?msg=track_deleted");
    }
} else {
    header("Location: home.php");
}
?>
