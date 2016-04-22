<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
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
				<!-- SEARCH -->
				<form class="navbar-form navbar-left" role="search" action="index.php" method="get">
					
					<input type="text" class="form-control" placeholder="Search" name="search" id="search">
					<button type="submit" class="btn btn-success">Search</button>
					<br>
				</form>
				<!-- SEARCH -->
		  </div>
		</nav>
		<!-- navbar -->
	<center>
	<h1>CRUD</h1>
	</center>
	
			<?php include('common/db_connect.php'); ?>
			<!-- table -->
			<div class="row">
			<div class="col-md-8 col-md-offset-2">
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
				    
				    <?php include('tables/table_1.php'); ?>
				    
				  </tbody>
				</table>
			</div>
			</div>
			<!-- table -->

			<!-- ADD NEW -->
				<center>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add new</button>

					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					  <div class="modal-dialog modal-lg">
					    <div class="modal-content">
						    <!-- forms -->
								<?php include('forms/form_1.php'); ?>
							<!-- forms -->

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