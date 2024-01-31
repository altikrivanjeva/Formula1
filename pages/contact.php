<?php

$conn = mysqli_connect('localhost','root','','formula1');

$username = $_POST["username"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = "INSERT INTO contact (username, email, message) VALUES ('$username', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
die();
$conn->close();

?>