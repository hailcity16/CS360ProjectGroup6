<!DOCTYPE html>

<html>

	<head>
		<meta charset = "utf-8"/>
		<title> Register </title>
		<link rel = "stylesheet" href = "projectstyle.css"/>
	</head>
	
	<body>
		<?php
			require('db_connect.php');
			
			if(isset($_REQUEST['email'])){
				$first_name = stripslashes($_REQUEST['first_name']);
				$first_name = mysqli_real_escape_string($con, $first_name);
				
				$last_name = stripslashes($_REQUEST['last_name']);
				$last_name = mysqli_real_escape_string($con, $last_name);
				
				$email = stripslashes($_REQUEST['email']);
				$email = mysqli_real_escape_string($con, $email);
				
				$password = stripslashes($_REQUEST['password']);
				$password = mysqli_real_escape_string($con, $password);
				
				$creation_time = date("Y-m-d H:i:s");
				
				$query = "INSERT into `users` (first_name, last_name, password, email, creation_time)
                VALUES ('$first_name', '$last_name', '" . md5($password) . "', '$email', '$creation_time')";
				
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
					<input type="text" class="login-input" name="first_name" placeholder="First Name"/>
					<input type = "text" class = "login-input" name = "last_name" placeholder = "Last Name"/>
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