<?php
session_start();
$_SESSION['email'] = $authemail;
$_SESSION['password'] = $authpassword;

if(!isset($_SESSION['email'])){
	header('Location: unset_session.php');
}
?>

