<?php
	include_once('../databse/user.php');
	session_start();
	ob_start();
	if((isset($_POST['btnLogin']))&&(isset($_POST['btnLogin']))){

		$user = $_POST['txtUser'];
		$pass = $_POST['txtPass'];
		$user=checkuser($user,$pass);
		$_SESSION['role']=$user;
		if($user!=null){
			$_SESSION['user']=$user;
			if($user=="manager"){
				header("Location: dashboard.php");
			}
		}
		else{
			echo "<script>alert('Login failed');</script>";
		}

	}
?>


<html>

<head>
	<link rel="stylesheet" type="text/css" href="../assets/styles/login.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>

	<div class="form-container">
		<div class="login-card">
			<div class="column">
				<h1>Login</h1>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
					<div class="form-item">
						<input type="text" class="form-element" placeholder="✉️ |  Username or Email" name="txtUser" required>
					</div>
					<div class="form-item">
						<input type="password" class="form-element" id="password-form" placeholder="🔒 | Password" name="txtPass" required>
					</div>

					<div class="flex">
						<button type="submit" class="btn btn-primary" name="btnLogin" value="Login">Sign in</button>
						<a href="#">Reset your password</a>
					</div>
					<div class="sign-in-with-google">
						<a class="google-button" href="#">
							<img width=30 src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1024px-Google_%22G%22_logo.svg.png" alt="">
							Sign in with Google
						</a>
					</div>
				</form>
			</div>
			<div class="column">
				<h2>Welcome to Football League Management App</h2>
				<p>If you don't have an account, would you like to register right now</p>
				<a href="register.php">Sign Up</a>
			</div>
		</div>
	</div>
</body>

</html>