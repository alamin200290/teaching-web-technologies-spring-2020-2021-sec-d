<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Null submission";
		}else{

			//$user = $_SESSION['abc'];

			if($username == $_COOKIE['username'] && $password == $_COOKIE['password']){
				
				//$_SESSION['status'] = true;
				setcookie('status', 'true', time()+5000, '/');
				header('location: home.php');

			}else{
				echo "invalid user...";
			}
		}
	}
?>