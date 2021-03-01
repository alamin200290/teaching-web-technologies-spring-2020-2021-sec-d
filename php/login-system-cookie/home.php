<?php
	//session_start();
	if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome, abc</h1>
	<a href="logout.php">Logout</a>
</body>
</html>

<?php		
	}else{
		header('location: login.html');
	}
?>


