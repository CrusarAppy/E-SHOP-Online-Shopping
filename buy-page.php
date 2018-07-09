<?php 
	session_start();

	if (!isset($_SESSION['username'])) {
		header("location: userlogin.php");
		exit();
	}
	$product=$_POST['product'];
	$amount=$_POST['amount'];
	$price=$_POST['price'];
	$id=$_POST['id'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
<meta name="viewport" content="width=device-width, initial-scale=0.5">
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
					<li><a href="index.php" >HOME</a></li>
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

	<div class="welcome">
	<img src="img/auction images/<?php echo $id; ?>.jpg">
		<h2>Item: <?php echo $product; ?></h3>
		
		<p>Price: NRs <?php echo $price; ?> /-</p>
		<p>Number of Items:<?php echo $amount; ?></p>
		<p>
			Total Amount: NRs 
			<?php 
				$x=(float)$price*(int)$amount;
				echo $x;
		 	?> /-
		 </p>
		<form method="post" action="purchase.php">
			<h4>WHERE TO DELIVER??</h4>
			<input type="text" name="state" placeholder="State" required="required">
			<input type="text" name="city" placeholder="city" required="required">
			<input type="text" name="Street" placeholder="Street" required="required">
			<input type="text" name="House" placeholder="House Number" required="required">
			<div class="confirm">
			<p>Are you sure you want to make the above purchase?</p>
			<a ><button type="submit" id="yes" class="buy">Yes</button></a>
			<a href="index.php"><button id="no" class="buy">No</button></a>
		</div>
		</form>
		<footer>
		
	</div>
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