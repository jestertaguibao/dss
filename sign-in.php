<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
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
	      <a class="navbar-brand" href="index.php">
	       test
	      </a>
	    </div>				
	  </div>
	</nav>
	<!-- navbar -->

		<!-- SIGNIN -->
		<center>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-user" aria-hidden="true"></i><br>SIGN IN</button>
		</center>
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		  <div class="modal-dialog modal-sm">
		    <div class="modal-content">
		    <div class="alert alert-success" role="alert">SIGN IN</div>
		   		<form class="form-horizontal" method="post" action="auth.php" >
				    <input type="email" name="authemail"></input>
				    <input type="password" name="authpassword"></input>
				    <input type="submit"></input>
				</form>
		    </div>
		  </div>
		</div>
		<!-- SIGNIN -->

</body>
	<!-- SCRIPT -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- SCRIPT -->
</html>