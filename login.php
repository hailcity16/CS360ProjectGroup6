<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Login</title>
		<link rel="stylesheet" href="projectstyle.css"/>
	</head>
	
	<body>
		<?php
			require('db_connect.php');
			session_start();
			
			if(isset($_POST['email'])) {
				$email = stripslashes($_REQUEST['email']);
				$email = mysqli_real_escape_string($con, $email);
				
				$password = stripslashes($_REQUEST['password']);
				$password = mysqli_real_escape_string($con, $password);
				
				$query = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
					 
				$result = mysqli_query($con, $query) or die(mysql_error());
				
				$rows = mysqli_num_rows($result);
				
				if($rows == 1){
					$_SESSION['email'] = $email;
					header("Location: dashboard.php");
				}
				
				else{
				  echo "<div class='form'>
                  <h3>Incorrect Email/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
				}
			}
			
			else {
		?>
				<form class="form" method="post" name="login">
					<h1 class="login-title">Login</h1>
					<input type="text" class="login-input" name="email" placeholder="Email" autofocus="true"/>
					<input type="password" class="login-input" name="password" placeholder="Password"/>
					<input type="submit" value="Login" name="submit" class="login-button"/>
					<p class="link"><a href="reg.php">New Registration</a></p>
				</form>
		<?php
			}
		?>
	</body>
</html>