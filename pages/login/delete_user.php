<?php 
session_start();
include("php/config.php");

if(!isset($_SESSION['valid']) || $_SESSION['role'] != 'admin'){
    header("Location: index.php");
    exit();
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if($id == $_SESSION['id']){
        header("Location: home.php?error=cannot_delete_self");
        exit();
    }

    $delete_query = mysqli_query($con, "DELETE FROM users WHERE Id=$id") or die("Error deleting user");

    if($delete_query){
        header("Location: home.php?msg=user_deleted");
    }
} else {
    header("Location: home.php");
}
?>
