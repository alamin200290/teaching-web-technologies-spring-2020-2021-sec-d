<?php

	$myfile = fopen('users.json', 'r');
	$data 	= fread($myfile, filesize('users.json'));
	
	/*$user = '{
				"name": "alamin", 
				"id": 12,
				"email": "alamin@gmail.com" 
			}';*/

	$json 	= json_decode($data, true);

	$user = [
				'name' => 'alamin',
				'id'=>	12,
				'email' => 'alamin@gmail.com'
			];

	array_push($json, $user);
	
	//$json = json_encode($user);
	//print_r($json);

	$data = json_encode($json);
	echo $data;

	$myfile = fopen('users.json', 'w');
	fwrite($myfile, $data);
?>