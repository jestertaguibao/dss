<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- CSS -->

</head>
	<body>

		<!-- navbar -->
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">
		       test
		      </a>
		    </div>
		  </div>
		</nav>
		<!-- navbar -->
	<center>
	<h1>CRUD</h1>
	</center>
		<?php include('common/db_connect.php'); ?>
		<!-- table -->
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th>ID</th>
		      <th>Email</th>
		      <th>Password</th>
		      <th>Name</th>
		      <th>Address</th>
		    </tr>
		  </thead>
		  <tbody>
		    
		    <?php include('common/table.php'); ?>
		    
		  </tbody>
		</table>
		<!-- table -->

		<!-- ADD NEW -->
			<center>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add new</button>

			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
				    <!-- fields -->
					      <form>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputFile">File input</label>
						    <input type="file" id="exampleInputFile">
						    <p class="help-block">Example block-level help text here.</p>
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Check me out
						    </label>
						  </div>
						  <button type="submit" class="btn btn-default">Submit</button>
						</form>
					<!-- fields -->

			    </div>
			  </div>
			</div>
			</center>
		
		<!-- ADD NEW -->

	</body>
	<!-- SCRIPT -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- SCRIPT -->

</html>