<?php

$authemail = $_POST['authemail'];
$authpassword = $_POST['authpassword'];

include('common/db_connect.php');

$sql = "SELECT * FROM user WHERE email = '$authemail' AND password = '$authpassword'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    echo $row["id"];
	    }
	   

	} else {
	    echo "0 results";
	}
	$conn->close();
include('session.php');
?>