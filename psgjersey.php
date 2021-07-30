<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paris Saint Germain Home Jersey 2020/21</title>
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

<!--- single product details --->
<div class="small-container single-product">
  <div class="row">
    <div class="col-2">
      <img src="psg.jpg" width="100%">
    </div>
    <div class="col-2">
      <p>Home / Jersey</p>
      <h1>Paris Saint Germain Home Jersey 2020/21</h1>
      <h4>$50.00</h4>
      <select>
        <option>Select Size</option>
        <option>XXL</option>
        <option>XL</option>
        <option>L</option>
        <option>M</option>
        <option>S</option>
      </select>
      <input type="number" value="1">
      <a href="cart.php" class="btn">Add To Cart</a>
      <h3>Product Details <i class="fa fa-indent"></i></h3>
      <br>
      <p>Get kitted out like your favourite players. As worn by the first team on matchdays, this short sleeve shirt is the perfect way to show your pride and passion. </p>
    </div>
  </div>
</div>

<!---title--->
  <div class="small-container">
    <div class="row-2">
      <h2>Related Products</h2>
    </div>
  </div>



<!---products--->
<div class="small-container single-product">
     <div class="row">
       <div class="col-4">
         <img src="psg.jpg">
         <a href="psgjersey.php"><h4> Paris Saint German Home Jersey Long Sleeves 2020/21 </h4></a>
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
         <img src="ghost.jpg">
         <a href="ghost.php"><h4> Adidas Ghost Shin Guards </h4></a>
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
         <a href="protega.php"><h4> Nike Protega Shin Guards </h4></a>
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
         <img src="realmadridwristband.jpg">
         <a href="realmadridwristband.php"><h4> Real Madrid Wristband </h4></a>
         <div class= "rating">
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star"></i>
           <i class="fa fa-star-half-o"></i>
           <i class="fa fa-star-o"></i>
         </div>
         <p>$5.00</p>
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
