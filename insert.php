<?php
  if (isset($_POST['email'])){
  $email = $_POST['email'];
  include('common/db_connect.php');
  $sql = "INSERT INTO user (email, password, name, address)
  VALUES ('$email', 'Doe', 'john', 'Angeles City')";


      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

  $conn->close();
  }
header("Location: index.php"); 
?>