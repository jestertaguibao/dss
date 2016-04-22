<?php
if (isset($_POST['submit'])){

  $email = $_POST['email'];
  $pass = $_POST['password'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $id = $_POST['submit'];
include('common/db_connect.php');

$sql = "UPDATE user SET email='$email', name='$name', password='$address', address='$address' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}
header("Location: index.php"); 
?>