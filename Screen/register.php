<?php
	include_once('../databse/user.php');
	session_start();
	
	if((isset($_POST['btnSignUp']))&&(isset($_POST['btnSignUp']))){
		$user=$_POST['txtUser'];
		$pass=$_POST['txtPass'];
		if(checkuser($user,$pass)==null){
			createuser($user,$pass);
			$_SESSION['user']=$user;
			echo "<script>alert('Sign up successfully');</script>";
			header("Location: dashboard.php");
		}
		else{
			echo "<script>alert('Sign up failed');</script>";
		}
	}

?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="../assets/styles/register.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
	<script src="https://kit.fontawesome.com/dadc55c5f1.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


	<div class="form-container">
		<div class="register-card">
			<div class="column">
				<h1>Sign up</h1>
				<form id=register-form method="POST">
					<div class="form-item">
						<input type="text" class="form-element" placeholder="✉️ |  Email Address" name="txtUser" required>
						<i id="valid_email" class="fa-solid fa-circle-check" style="margin-left: -50px;display:none;"></i>
						<i id="invalid_email" class="fa-solid fa-circle-exclamation" style="margin-left: -50px;display:none;"></i>
					</div>
					<div class="form-item">
						<input type="password" class="form-element" id="password-form" placeholder="🔒 | Password" name="txtPass" required>
						<i id="valid_password" class="fa-solid fa-circle-check" style="margin-left: -50px;display:none;"></i>
						<i id="invalid_password" class="fa-solid fa-circle-exclamation" style="margin-left: -50px;display:none"></i>

						<ul class="password-validation">
							<li class="length-validation">Password contains at least 6 characters</li>
							<li class="number-validation">Must contain number</li>
							<li class="character-validation">At least one lowercase, one uppercase letter</li>
						</ul>

					</div>
					<div class="form-item">
						<input type="password" class="form-element" id="password-form" placeholder="🔒 | Password" name="txtRePass" required>
						<i id="valid_rpassword" class="fa-solid fa-circle-check" style="margin-left: -50px;display:none;"></i>
						<i id="invalid_rpassword" class="fa-solid fa-circle-exclamation" style="margin-left: -50px;display:none;"></i>

					</div>
					<label class="terms">
						<input type="checkbox" id="terms-checkbox" style="display:none;">
						<span class="switch"></span>
						I accept the <a style="color:#4CF2D2;" target="_blank" asp-area="" asp-controller="Home" asp-action="Privacy">terms of service</a>
					</label>
					<div id="error-message" style="color: #f44336; display: none;">You must accept the terms of service.</div>
					<div class="flex">
						<button type="submit" class="btn btn-primary" name="btnSignUp">Create Account</button>
					</div>
					<p style="margin-top:3rem;margin-bottom:1.5rem">Other sign-up methods</p>
					<div class="sign-in-with-google">
						<a class="google-button" href="{% provider_login_url 'google' %}">
							<img width=30 src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1024px-Google_%22G%22_logo.svg.png" alt="">
							Sign in with Google
						</a>
					</div>
				</form>
			</div>
			<div class="column">
				<p>If you don't have an account, would you like to register right now</p>
				<a href="{% url 'register:register' %}">Sign Up</a>
			</div>
		</div>
	</div>
	<script src="../assets/js/FLM-2023.register.js"></script>
</body>

</html>