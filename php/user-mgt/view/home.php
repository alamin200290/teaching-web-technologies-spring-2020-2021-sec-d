<?php
	$title = "Home page";
	//include('header.php');
	//include_once('header.php');
	//require('header.php');
	require_once('header.php')
?>

	<div id="page_title">
		<h1>Welcome Home, <?php echo $_SESSION['username']?></h1>		
	</div>

	<div id="nav_bar">

		<a href="create.php">Create New User</a> |	
		<a href="user_list.php">View User List</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
		<br>
		<br>
		<br>
	</div>

<?php include('footer.php') ?>