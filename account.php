<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://use.fontawesome.com/bcd661e9e2.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <div class="container">
    <div class="navbar">
      <div class="logo">
        <img src="logo.png" width="250px">
      </div>
      <nav>
        <ul id="MenuItems">
          <li><a href="intro.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="aboutus.php">About</a></li>
          <li><a href="index.php">Account</a></li>
        </ul>
      </nav>
      <a href="cart.html"><img src="cart.png" width="30px" height="30px"></a>
      <img src="menu.png" class="menu-icon" onclick="menutoggle()">
   </div>

<!--- account-page --->

<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="messironaldo.png" width="100%">
			</div>

			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="Indicator">
				</div>

				<form id="LoginForm">
					<input type="text" placeholder="Username">
					<input type="password" placeholder="Password">
					<button type="submit" class="btn">Login</button>
					<a href="">Forgot password</a>
				</form>

				<form id="RegForm">
					<input type="text" placeholder="Username">
					<input type="email" placeholder="Email">
					<input type="password" placeholder="Password">
					<button type="submit" class="btn">Register</button>

				</form>
			</div>
		</div>
		</div>
	</div>
</div>
<!--- footer --->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and ios mobile phone.</p>
					<div class="app-logo">
						<img src="store.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="logo.png">
					<p> Download App for android and ios mobile phone.</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affiliate</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Follow us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>Youtube</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright 2021</p>
		</div>
	</div>
<!--- js for toggle menu --->
	<script>
	var MenuItems = document.getElementById("MenuItems");

	MenuItems.style.maxHeight = "0px";

	function menutoggle(){
		if(MenuItems.style.maxHeight == "0px")
			{
				MenuItems.style.maxHeight = "200px"
			}
		else
			{
				MenuItems.style.maxHeight = "0px"
			}
	}
	</script>

<!--- js for toggle Form --->

	<script>

	var LoginForm = document.getElementById("LoginForm");
	var RegForm = document.getElementById("RegForm");
	var Indicator = document.getElementById("Indicator");

		function register(){

			RegForm.style.transform = "translateX(0px)";
			LoginForm.style.transform = "translateX(0px)";
			Indicator.style.transform = "translateX(100px)";
		}

		function login(){

			RegForm.style.transform = "translateX(300px)";
			LoginForm.style.transform = "translateX(300px)";
			Indicator.style.transform = "translateX(0px)";
		}

	</script>

</body>
</html>
