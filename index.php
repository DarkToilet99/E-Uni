<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Start page</title>
	<link rel="stylesheet" href="style.css">
	<style>
		input[type="text"]:focus{
	    	border-color: #00B0FF;
  			box-shadow: 0 0 8px 0 #00B0FF;
		}
		input[type="password"]:focus{
	    	border-color: #00B0FF;
  			box-shadow: 0 0 8px 0 #00B0FF;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="logo-box">
			<img class="logo" src="logo.png">
		</div>
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>

			<form id="login" action="login.php" method="post" class="input-group">
				<input type="text" class="input-field" placeholder="Email" name="email" required>
				<input type="Password" class="input-field" placeholder="Enter Password" name="password" required>
				<input type="Checkbox" class="check-box"><span>Remember me</span>
				<br><br><br>
				<button type="submit" class="submit-btn">Log in</button>
			</form>

			<form id="register" action="connect.php" method="post" class="input-group-register">
				<input type="text" class="input-field" placeholder="First name" id="firstName" name="firstName" required>
				<input type="text" class="input-field" placeholder="Last name" id="lastName" name="lastName" required>
				<input type="text" class="input-field" placeholder="Email adress" id="email" name="email" required>
				<input type="Password" class="input-field" placeholder="Password" id="password" name="password" required>
				<input type="Password" class="input-field" placeholder="Confirm password" id="confirmpassword" name="confirmpassword" required><br>
				<button type="submit" class="submit-btn-register">Register</button>
			</form>
		</div>
	</div>

	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register(){
			x.style.transition = "visibility 0s ";
			y.style.transition = "visibility 1s ";
			y.style.visibility = "visible";
			x.style.visibility = "hidden";

			z.style.left = "110px";
		}
		function login(){
			x.style.transition = "visibility 1s";
			y.style.transition = "visibility 0s";
			x.style.visibility = "visible";
			y.style.visibility = "hidden";

			z.style.left = "0px";
		}
	</script>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<img src="photo2.png" class="photoleft">
	<img src="photo1.png" class="photoright">

	<footer id="footer">
		<p>Copyright &copy; 2020, E-Uni</p>
	</footer>

</body>
</html>
