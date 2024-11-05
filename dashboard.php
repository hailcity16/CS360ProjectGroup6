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
			<p><?php echo $_SESSION['username']; ?>!</p>
			<p>Barter dashboard</p>
			<p><a href = "bulletin1.php"> Bulletin Board </a></p>
			<p><a href="linkpartner.php">Link To partner</a></p>
            <p><a href="transaction1.php">Conduct Transactions</a></p>
            <p><a href="logout.php">Logout</a></p>
			<p><a href = "post-ad.php"> Post On Board</a></p>
		</div>
	</body>
</html>

	