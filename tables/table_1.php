<form action="index.php" method="get">
<label>SEARCH</label>
<input type="text" class="form-control" placeholder="Text input" name="search" id="search">
<button type="submit" class="btn btn-success">Search</button>
<br>
</form>


<?php
	$search='';
	if (isset($_GET['search'])){
	$search = $_GET['search'];
	}
	
	$sql = "SELECT * FROM user WHERE name LIKE '$search%' ORDER BY id DESC";
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
		 
		      <!-- DELETE -->
		      <td>
		      	
		      	<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".<?php echo $row["id"]; ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>

					<div class="modal fade <?php echo $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					    	<center>
					    	<div class="alert alert-danger" role="alert"><h5>Are you sure?</h5></div>
					      	<form action="delete.php" method="post"><button type="submit" class="btn btn-warning" name="deleteid" value='<?php echo $row["id"]; ?>'>Delete</button></form>
					    	<br>
					    	</center>
					    </div>
					  </div>
					</div>

		      </td>
		      <!-- DELETE -->


		      <!-- UPDATE -->
		      <td>
		      	<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".<?php echo $row["id"]; ?>-modal-lg"><i class="fa fa-pencil" aria-hidden="true"></i></button>

					<div class="modal fade <?php echo $row["id"]; ?>-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					  <div class="modal-dialog modal-lg">
					    <div class="modal-content">
						    <!-- forms -->
							
						    	<div class="alert alert-info" role="alert"><h3>Edit data</h3></div>
								<center>  
								<div class="row">
								  <div class="col-md-8 col-md-offset-2">
								    <form action="update.php" method="post" role='form' id="contact-form">        

								        <label for="email" class="control-label" >Email</label>
								        <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?php echo $row["email"]; ?>" required>
								        <br>
								        <label>Password</label>
								        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $row["password"]; ?>" required>
								        <br>
								        <label>Name</label>
								        <input type="text" class="form-control" placeholder="Text input" name="name" id="name" value="<?php echo $row["name"]; ?>" required>
								        <br>
								        <label>Address</label>
								        <textarea class="form-control" rows="3" name="address"><?php echo $row["address"]; ?></textarea>
								    
								        <div class="form-group">  
								        <button type="submit" class="btn btn-success" name="submit" value="<?php echo $row["id"]; ?>">Save</button>
								        </div>
								        <button type="reset" class="btn">Reset</button>
								        
								    </form>
								    <br>
								  </div>
								</div>
								</center>

							<!-- forms -->

					    </div>
					  </div>
					</div>
		      <!-- UPDATE -->
		      </td>
		    </tr>
<?php
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>

