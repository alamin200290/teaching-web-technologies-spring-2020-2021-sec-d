<?php

	//print_r($_GET['myname']);
	//print_r($_POST);
	
	if(isset($_POST['submit'])){

		$name 		= $_POST['myname'];
		$password 	= $_POST['password'];

		if($name == "" || $password == ""){
			echo "null submission...";
		}else{
			echo $name."<br>".$password;

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Name</legend>
			Name: <input type="text" name="myname" value="<?php echo $name; ?>"> <br>
			Password: <input type="password" name="password" value="<?=$password ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>