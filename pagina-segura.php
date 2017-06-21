<?php
	session_start();
	if(!isset($_SESSION['user'])){
		$_SESSION['error'] = "Realize login primeiro.";
		header("Location:login.php");
	}
	echo "Bom dia Sr(a) ".$_SESSION['user'];
?>