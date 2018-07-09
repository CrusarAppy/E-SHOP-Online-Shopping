<?php
session_start();
if(isset($_POST['search']))
{
$key=$_POST["search"];  //key=pattern to be searched
$conn=mysqli_connect("localhost","root","",'auction');
$sql="select * from `product-info` where `name` like '%$key%' OR `category` like '%$key%'";
$result=mysqli_query($conn, $sql);
	


	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
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
				<form method="post" action="search.php">
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
	<div class="brow">
			
			<h3>Search Results for "<?php echo $key; ?>"</h3>
			<div style="float: left;">
					<a href="" class="left-button" > </a>
			</div>
			<div style="float: right;">
				    <a class="right-button" href="" ></a>
			</div>
			<div style="clear: both;"></div>
			<div class="ongoing-body"> 
				
				<?php 
					$num_rows=mysqli_num_rows($result);
					if($num_rows>0){
						while($row=mysqli_fetch_assoc($result)){ 
					$x=$row['id'];	
					
					echo "<div class='ongoing-content'>
					<div class='ongoing-tile'>
						<div class='image-con'>
							<a href='product-description.php?id=".$row['id']."'><img src='img/auction images/".$row['id'].".jpg'></a>
						</div>
					
					<h3>NRs ".$row['price']."/-</h3>
					<p><a href='product-description.php?id=".$row['id']."'>".$row['name']."</a></p>
						
					</div>
				</div>";
					}
				}else{
					echo "<p>NO results found</p>";
				} 

				?>
			</div>
		</div>
		
		
</body>
</html>