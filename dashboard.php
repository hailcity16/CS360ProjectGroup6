<?php
	include("session_auto.php");
?>

<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Dashboard - Client area</title>
		<link rel="stylesheet" href="projectstyle.css" />
	</head>
	
	<body>
		<div class="form">
			<p><?php echo $_SESSION['email']; ?>!</p>
			<p>User dashboard page.</p>
			<p><a href="logout.php">Logout</a></p>
			<p><a href="adduser.php"> Add User</a></p>
			<p><a href="userlist.php"> User Table</a></p>
		</div>
	</body>
</html>

	