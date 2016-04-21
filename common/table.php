<?php 
	$sql = "SELECT * FROM user";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
?>			
			<tr>
		      <th scope="row"><?php echo $row["id"]; ?></th>
		      <td><?php echo $row["email"]; ?></td>
		      <td><?php echo $row["password"]; ?></td>
		      <td><?php echo $row["name"]; ?></td>
		      <td><?php echo $row["address"]; ?></td>
		    </tr>
<?php
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>