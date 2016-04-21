<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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

	</body>
<!-- SCRIPT -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- SCRIPT -->
</html>