<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		
		if($username == "" || $password == ""){
			echo "Null submission";
		}else{

			$user = $_SESSION['abc'];

			if($username == $user['username'] && $password == $user['password']){
				
				$_SESSION['status'] = true;
				header('location: home.php');

			}else{
				echo "invalid user...";
			}
		}
	}
?>