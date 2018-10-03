<?php 
		
	session_start();
	$_SESSION['login'] = "no";
	header("location: ../html/login.html");

 ?>