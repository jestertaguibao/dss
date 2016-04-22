<?php
  if (isset($_POST['email'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  include('common/db_connect.php');
  $sql = "INSERT INTO user (email, password, name, address)
  VALUES ('$email', '$password', '$name', '$address')";


      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

  $conn->close();
  }
header("Location: index.php"); 
?>