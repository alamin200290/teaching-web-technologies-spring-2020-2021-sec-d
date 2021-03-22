<?php
	session_start();
	require_once('../model/userModel.php');

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
				
				$user = [
							'username'	=>$username, 
							'email'		=>$email, 
							'password'	=>$password,
							'type'		=>'user'
						];

				$status = insertUser($user);

				if($status){
					header('location: ../view/login.html');
				}else{
					echo "Db error";
				}

			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>