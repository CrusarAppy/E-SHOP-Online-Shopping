<!DOCTYPE html>
<html>
<?php 
	session_start();
	$conn=mysqli_connect("localhost","root","",'auction');
	$sql="SELECT * FROM `product-info` WHERE `id`= '1' ";
	$result=mysqli_query($conn, $sql);
	
?>
<head>
	<title>Online SHOPPING: SHOP Online</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
<meta name="viewport" content="width=device-width, initial-scale=0.5">
<script type="text/javascript">
	function main(x){
		var a= x.id;
		var b= document.getElementById(a/9).innerHTML;
		var c=	document.getElementById(a/9*7).innerHTML;
		document.getElementById('man').innerHTML="<img src='img/auction images/"+a+".jpg'>";
		document.getElementById('man').setAttribute('href',"product-description.php?id="+a);
		document.getElementById('k').innerHTML="<b> "+b+"</b><br>Price:NRs "+c;

	}
</script>

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
					<li><a href="index.php" class="active">HOME</a></li>
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
	
	
		<div class="featured">
		<h3>Featured Sales</h3>
			<div class="main-featured">
				<?php 
					$x=rand(1,84);
					$sql="SELECT * FROM `product-info` WHERE `id`= $x";
					$result=mysqli_query($conn, $sql);
					$row=mysqli_fetch_assoc($result);
					echo "<a id='man' href='product-description.php?id=".$row['id']."'><img src='img/auction images/".$x.".jpg'></a>
				<span id='k'>
					<b>".$row['name']."</b><br>
					Price:NRs ".$row['price']."/-
				</span>";
				 ?>
				
			</div>
				<div id='' style='display: none;'></div>
			<div class="side-featured">
				<ul>
				<?php 
				for ($i=1; $i <=6; $i++) { 
					$sql="SELECT * FROM `product-info` WHERE `id`= $i*9";
					$result=mysqli_query($conn, $sql);
					$row=mysqli_fetch_assoc($result);
					echo "<div id='".$i."' style='display: none;'>".$row['name']."</div>";
					echo "<div id='".($i*7)."' style='display: none;'>".$row['price']."/-</div>";					
					echo "<li id='".($i*9)."'. onclick='main(this)'><a href='' onclick='return false'><img src='img/auction images/".($i*9).".jpg'></a></li>";
				}
					
				 ?>
					
				</ul>
			</div>
		</div>
		<div class="ongoing">
			<div class="head">
				<div style="float: right;"> <a href="browse.php?category=Trending Sales">View All Trending Sales >></a></div>
			</div>
			<h3>Trending Sales</h3>
			<div style="float: left;">
					<a href="" class="left-button" > </a>
			</div>
			<div style="float: right;">
				    <a class="right-button" href="" ></a>
			</div>
			<div style="clear: both;"></div>
			<div class="ongoing-body"> 
				
				<?php for ($i=1; $i <=6 ; $i++) { 
					$x=rand(1,71);
					$sql="SELECT * FROM `product-info` WHERE `id`= $x";
					$result=mysqli_query($conn, $sql);
					$row=mysqli_fetch_assoc($result);
					echo "<div class='ongoing-content'>
					<div class='ongoing-tile'>
						<div class='image-con'>
							<a href='product-description.php?id=".$row['id']."'><img src='img/auction images/".$row['id'].".jpg'></a>
						</div>
					
					<h3>NRs ".$row['price']."/-</h3>
					<p><a href='product-description.php?id=".$row['id']."'>".$row['name']."</a></p>
						
					</div>
				</div>";
				} ?>
			</div>
		</div>
		<div style="clear:both;"></div>
		<div class="ongoing">
			<div class="head">
				<div style="float: right;"> <a href="browse.php?category=Recently Sold">View All Recently Sold >></a></div>
			</div>
			<h3>Recently Sold</h3>
			<div style="float: left;">
					<a href="" class="left-button" > </a>
			</div>
			<div style="float: right;">
				    <a class="right-button" href="" ></a>
			</div>
			<div style="clear: both;"></div>
			<div class="ongoing-body"> 
				<?php for ($i=1; $i <=6 ; $i++) { 
					$x=rand(1,85);
					$sql="SELECT * FROM `product-info` WHERE `id`= $x";
					$result=mysqli_query($conn, $sql);
					$row=mysqli_fetch_assoc($result);
					echo "<div class='ongoing-content'>
					<div class='ongoing-tile'>
						<div class='image-con'>
							<a href='product-description.php?id=".$row['id']."'><img src='img/auction images/".$row['id'].".jpg'></a>
						</div>
					
					<h3>NRs ".$row['price']."/-</h3>
					<p><a href='product-description.php?id=".$row['id']."'>".$row['name']."</a></p>
						
					</div>
				</div>";
				} ?>
			</div>
		</div>
		<div style="clear: both"></div>
		<div class="ongoing">
			<div class="head">
				<div style="float: right;"> <a href="browse.php?category=TOP Sales">View All TOP SALES >></a></div>
			</div>
			<h3>TOP SALES</h3>
			<div style="float: left;">
					<a href="" class="left-button" > </a>
			</div>
			<div style="float: right;">
				    <a class="right-button" href="" ></a>
			</div>
			<div style="clear: both;"></div>
			<div class="ongoing-body"> 
				<?php for ($i=1; $i <=6 ; $i++) { 
					$x=rand(1,84);
					$sql="SELECT * FROM `product-info` WHERE `id`= $x";
					$result=mysqli_query($conn, $sql);
					$row=mysqli_fetch_assoc($result);
					echo "<div class='ongoing-content'>
					<div class='ongoing-tile'>
						<div class='image-con'>
							<a href='product-description.php?id=".$row['id']."'><img src='img/auction images/".$row['id'].".jpg'></a>
						</div>
					
					<h3>NRs ".$row['price']."/-</h3>
					<p><a href='product-description.php?id=".$row['id']."'>".$row['name']."</a></p>
						
					</div>
				</div>";
				} ?>
			</div>
		</div>
		<div style="clear: both"></div>
	
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