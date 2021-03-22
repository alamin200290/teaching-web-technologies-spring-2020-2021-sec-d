<?php

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	if($conn == null){
		die('DB connection error!');
	}
	
	
	
	//$row = mysqli_fetch_assoc($result);
	//$row1 = mysqli_fetch_assoc($result);

	//echo $result[];

	//echo $result->num_rows;
	/*print_r($row);
	echo "<br>";
	print_r($row1);*/

	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
	
	echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>username</td>
				<td>email</td>
				<td>type</td>
			</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>
					<td>{$row['id']}</td>
					<td>{$row['username']}</td>
					<td>{$row['email']}</td>
					<td>{$row['type']}</td>
			</tr>";
	}

	echo "</table>";
	


	/*$sql = "select * from users where username='user' and password='user'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	print_r($data);*/


	/*$sql = "insert into users values('', 'xyz', 'xyz', 'xyz@gmail.com', 'user')";
	$result = mysqli_query($conn, $sql);
	if($result){
		echo "success";
	}else{
		echo "something wrong...";
	}*/

?>