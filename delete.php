<?php
include('common/db_connect.php');

$id = $_POST['deleteid'];

$sql = "DELETE FROM user WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
header("Location: index.php"); 
$conn->close();
?>