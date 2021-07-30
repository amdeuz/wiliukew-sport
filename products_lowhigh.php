<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - WiliUkew Sport</title>
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
      <a href="cart.php"><img src="cart.png" width="30px" height="30px"></a>
      <img src="menu.png" class="menu-icon" onclick="menutoggle()">
   </div>


  <div class="small-container">
    <div class="row row-2">
      <h2> All Products </h2>
      <select name="forma" onchange="location = this.value;">
        <option value="products_lowhigh.php">Sort by Price (Low to High)</option>
        <option value="products_highlow.php">Sort by Price (High to Low)</option>
        <option value="products.php">Default Sorting</option>
        <option value="products_rating.php">Sort by Rating</option>
      </select>
    </div>

    <div class="row">
      <div class="col-4">
        <img src="chelseawristband.jpg">
        <h4> Chelsea Wristband </h4>
        <div class= "rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$5.00</p>
    </div>
      <div class="col-4">
        <img src="realmadridwristband.jpg">
        <h4> Real Madrid Wristband </h4>
        <div class= "rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$5.00</p>
    </div>
      <div class="col-4">
        <img src="ghost.jpg">
        <h4> Adidas Ghost Shin Guards </h4>
        <div class= "rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$14.00</p>
      </div>
      <div class="col-4">
        <img src="protega.jpg">
        <h4> Nike Protega Shin Guards </h4>
        <div class= "rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p>$14.00</p>
      </div>
    </div>

      <div class="row">
        <div class="col-4">
          <img src="flightball.jpg">
          <h4> Nike Flight Ball Premier League </h4>
          <div class= "rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>$25.00</p>
        </div>
        <div class="col-4">
          <img src="chelsea.jpg">
          <a href="chelseajersey.html"><h4>Chelsea Jersey Home 2020/21</h4></a>
          <div class= "rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>$50.00</p>
        </div>
        <div class="col-4">
          <img src="mu.jpg">
          <h4> Manchester United Jersey Home 2020/21 </h4>
          <div class= "rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>
        <div class="col-4">
          <img src="psg.jpg">
          <h4> Paris Saint German Home Jersey Long Sleeves 2020/21 </h4>
          <div class= "rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>$50.00</p>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <img src="barcelona.jpg">
          <a href="barcelonajersey.php"><h4>Barcelona Jersey Home 2020/21</h4></a>
          <div class= "rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>
        <div class="col-4">
          <img src="realmadrid.jpg">
          <a href="realmadridjersey.php"><h4>Real Madrid Jersey Home 2020/21</h4></a>
          <div class= "rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>$50.00</p>
        </div>
        <div class="col-4">
          <img src="adidaspredator20.3.jpg">
          <a href="adidaspredator.php"><h4>Adidas Predator 20.3 Core Black</h4></a>
          <div class= "rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>$100.00</p>
        </div>
        <div class="col-4">
          <img src="nikemercurialsuperfly.jpg">
          <h4> Nike Mercurial Superfly VI Elite Firm Ground </h4>
          <div class= "rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>$100.00</p>
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
</body>
</html>
