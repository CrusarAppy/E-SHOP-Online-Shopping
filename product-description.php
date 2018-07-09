<?php 
	session_start();
	$name=$_GET["id"];
	
	$conn=mysqli_connect("localhost","root","",'auction');

	$sql="SELECT * FROM `product-info` WHERE `id`= $name ";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	$name=$row['name'];
	$description=$row['description'];
	$price=$row['price'];
	$id=$row['id']; ?>

<!DOCTYPE html>

<html>
<head>
	<title><?php echo $row['name']; ?></title>
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
				<form method="post" action="search.php">
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
	<h2 class="product-title">
		<?php echo $name; ?>
	</h2>
	<div class="product-page" >
		<div class="pro" style="float: left;">
			<?php 
				echo "<img src='img/auction images/".$id.".jpg'>";
			 ?>
		</div>
		<div style="clear: both"></div>
		<div class="product-info">
			<p style="float: left;">
				Price: NRs <?php echo $price; ?> /-
			</p>
			<form method="post" action="buy-page.php?">
				<input type="hidden" name="product" value="<?php echo $name; ?>">
				<input type="hidden" name="price" value="<?php echo $price; ?>">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<input style="float: right;" type="number" name="amount" placeholder="Amount" value="1" min="1">
				<button type="submit" style="float: right;" class="buy" >BUY</button>
			</form>
		</div>
		<div style="clear: both"> 
			<p id="des">
				<?php echo $description; ?>
			</p>
		</div>
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