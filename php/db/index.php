<?php

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	if($conn == null){
		die('DB connection error!');
	}
	
	/*$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
	//$row = mysqli_fetch_assoc($result);
	//$row1 = mysqli_fetch_assoc($result);

	//echo $result[];

	//echo $result->num_rows;
	print_r($row);
	echo "<br>";
	print_r($row1);

	while ($row = mysqli_fetch_assoc($result)) {
		echo "<h3>".$row['username']."</h3>";
	}*/


	/*$sql = "select * from users where username='user' and password='user'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	print_r($data);*/


	$sql = "insert into users values('', 'xyz', 'xyz', 'xyz@gmail.com', 'user')";
	$result = mysqli_query($conn, $sql);
	if($result){
		echo "success";
	}else{
		echo "something wrong...";
	}

?>