<?php
	
	//session_start();
	//unset($_SESSION['status']);
	//session_destroy();

	setcookie('status', 'false', time()-5000, '/');
	header('location: login.html');
?>