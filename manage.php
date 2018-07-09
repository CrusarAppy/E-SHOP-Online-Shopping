
<?php 
	session_start();
	$name=$_SESSION['username'];
	$conn=mysqli_connect("localhost","root","",'auction');
	$sql= " SELECT * FROM `user-info` WHERE `username`='$name'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
?>
 <!DOCTYPE html>
<html>
<head>
	<title>Manage Account</title>
</head>
<body>
	<head>
	<title>Online SHOPPING: SHOP Online</title>
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
		
		<div style="clear: both" >

					
			</div>
		
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
							<?php if (isset($_SESSION['username'])) {
								echo $row['name']; 
							}else 
								echo "Log in";
							 ?>
							
							</a>
						<div class="dropdown-content">
							<?php if (isset($_SESSION['username'])) {
								echo "<a href='welcome.php'>My Account</a>";
							}else 
								echo "<a href='userlogin.php'>Sign In</a>";
							 ?>
							<?php if (isset($_SESSION['username'])) {
  							
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
			<h1>Edit My info:</h1>
		<form method="post" action="welcome.php">
			<table>
				<tr>
					<td>Information</td>
					<td>Current Info</td>
					<td>New Info</td>
				</tr>
				<tr>
					<td>Name</td>
					<td><?php echo $row['name']; ?></td>
					<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $row['username']; ?></td>
					<input type="hidden" name="username" value="<?php echo $row['username']; ?>">
					<td>Cannot Be Changed!</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $row['email'] ?></td>
					<td>Cannot be changed!</td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><?php echo $row['phone']; ?></td>
					<td><input type="Number" name="phone" value="<?php echo $row['phone']; ?>"></td>
				</tr>
				<tr>
					<td>Birthday</td>
					<td><?php echo $row['Birthday']; ?></td>
					<td><input type="date" name="birthday" value="<?php echo $row['Birthday']; ?>"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $row['gender']; ?></td>
					<td>
						<select name="gender">
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><?php echo $row['password']; ?></td>
					<td><input type="date" name="password" value="<?php echo $row['password']; ?>"></td>
				</tr>
				<tr>
					<td>Credit Card NO.</td>
					<td><?php echo $row['credit card']; ?></td>
					<td><input type="date" name="credit" value="<?php echo $row['credit card']; ?>"></td>
				</tr>
			</table>
			<button id="yes" type="submit" class="buy">Save Changes</button>
			<button id="no" class="buy">Cancel</button>
		</form>
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