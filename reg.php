<!DOCTYPE html>

<html>

	<head>
		<meta charset = "utf-8"/>
		<title> BarterDB Register </title>
		<link rel = "stylesheet" href = "projectstyle.css"/>
	</head>
	
	<body>
		<?php
			require('db_connect.php');
			
			if(isset($_REQUEST['email'])){
				$username = stripslashes($_REQUEST['username']);
				$username = mysqli_real_escape_string($con, $username);
				
				$email = stripslashes($_REQUEST['email']);
				$email = mysqli_real_escape_string($con, $email);
				
				$password = stripslashes($_REQUEST['password']);
				$password = mysqli_real_escape_string($con, $password);
				
				
				$query = "INSERT into `users` (username, email, password)
                VALUES ('$username', '$email', '" . md5($password) . "')";
				
				$result = mysqli_query($con, $query);
				
				if($result) {
				  echo "<div class='form'>
                  <h3>You are registered!</h3><br/>
                  <p class='link'><a href='login.php'>Login</a></p>
                  </div>";
				}
			}
			
			else{
		?>
				<form class="form" action="" method="post">
					<h1 class="login-title">Register</h1>
					<input type="text" class="login-input" name="username" placeholder="Username"/>
					<input type="text" class="login-input" name="email" placeholder="Email Address" required>
					<input type="password" class="login-input" name="password" placeholder="Password" required>
					<input type="submit" name="submit" value="Register" class="login-button">
					<p class="link"><a href="login.php">Login</a></p>
				</form>
		<?php
			}
		?>
	</body>
</html>