<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];

		if($username == "" || $name == "" || $email == "" || $password == ""){
			echo "invalid information...please try again!";
		}else{

			if($password == $repass){

				//echo "registration success...";
				//echo "<a href='login.html'>SignIn </a>";

				//store user information
				$user = [
							'name'		=>$name, 
							'username'	=>$username, 
							'email'		=>$email, 
							'password'	=>$password
						];

				$_SESSION['abc'] = $user;
				//$_SESSION['username'] = $username;
				//$_SESSION['password'] = $password;

				header('location: login.html');
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>