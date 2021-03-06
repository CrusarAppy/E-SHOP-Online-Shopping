<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
		header("location: userlogin.php");
	}
	$date=time()+5*84600;
 ?><!DOCTYPE html>
<html>
<head>
	<title>Item Purchased</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header id="header" >
		<div id="primary-header">
				<div >
					<h1 >E-SHOP: Online Shopping</h1>
					<p >Nepal's largest Online shopping Site</p>
				</div>
				
				
		</div>
		<div id="search-box">
				<form>
					<input  type="search" name="search" placeholder="search">
				</form>
				<p>Search what you are looking for.</p>
		</div>
		<div style="clear: both"></div>
		<div id="nav">
			<div class="nav-left">
				<ul>
					<li><a href="index.php" class="">HOME</a></li>
					<li><a href="browse.php?category=Browse All">Browse All</a></li>
					<li class="dropdown">
						<a class="dropbtn" href="">Browse by CATEGORY</a>
						<div class=" browse dropdown-content">
							<a href="browse.php?category=Art">Art</a>
							<a href="browse.php?category=Books and Publications">Book and Publications</a>
							<a href="browse.php?category=Business and Industries">Business and Industries</a>
							<a href="browse.php?category=Cell phone and accessories">Cell phone and accessories</a>
							<a href="browse.php?category=Clothing, Shoes and accessories">Clothing, Shoes and accessories</a>
							<a href="browse.php?category=Collectibles">Collectibles</a>
							<a href="browse.php?category=Computer and Networking">Computer and Networking</a>
							<a href="browse.php?category=Electronics">Electronics</a>
							<a href="browse.php?category=Gift Cards">Gift Cards </a>
							<a href="browse.php?category=Health and Beauty">Health and Beauty</a>
							<a href="browse.php?category=Jewelery and Watches">Jewelery and Watches</a>
							<a href="browse.php?category=Music">Music</a>
							<a href="browse.php?category=Pottery and Glass">Pottery and Glass </a>
							<a href="browse.php?category=Sports">Sports</a>
							<a href="browse.php?category=Toys">Toys</a>
							<a href="browse.php?category=Video Games">Video Games</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="nav-right">
				<ul>
					<li class="dropdown">
						<a href="#" class="dropbtn">HELP</a>
						<div class="drop dropdown-content"> 
							<a href="#">FAQ</a>
							<a href="#">Talk to the administrator</a>
						</div>
					</li>
					<li><a href="">News and Resources</a></li>						
					<li><a href="">Contact Us</a></li>
					<li><a href="">About us</a></li>
					<li class="dropdown signin">
						<a href="" class="dropbtn">
							<?php if (isset($_SESSION['name'])) {
								echo $_SESSION['name']; 
							}else 
								echo "Log in";
							 ?>
							
							</a>
						<div class="dropdown-content">
							<?php if (isset($_SESSION['name'])) {
								echo "<a href='welcome.php'>My Account</a>";
							}else 
								echo "<a href='userlogin.php'>Sign In</a>";
							 ?>
							<?php if (isset($_SESSION['name'])) {
  							
								echo "<a href='userlogin.php?logout=true'>Log out</a>";
							}else 
								echo "<a href='register.php'>Register</a>";
							 ?>
						 </div>	
					</li>				
				</ul>
			</div>
		</div>
		<div style="clear:both;"></div>
	</header>
	<div class="welcome"><p>Congratulation! Your Purchase has been made! The item you purchased will be delivered within <?php echo date("Y-m-d",$date) ?>. Thank you for using E-shop.</p></div>
	<footer>
			<div id="footer">
				<div class="social">
					<h3>Follow us on:</h3>
					<a href=""><img src="img/social/fb.png"></a>
					<a href=""><img src="img/social/tw.png"></a>
				</div>	
				<div class="copyright">
					<p>Copyright&copy;2016,Apar Bhandari</p>
				</div>
				<div class="support">
					<h3>Customer Support</h3>
					<p>+9779876543210</p>
					<p>auxOn@gmail.com</p>
				</div>
			</div>
		</footer>

</body>
</html>