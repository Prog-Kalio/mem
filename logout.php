<?php session_start();

	unset($_SESSION['emailaddress']);
	session_destroy();

	header("Location: index.php");

?>
