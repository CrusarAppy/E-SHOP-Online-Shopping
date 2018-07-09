<?php 
	session_start();
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
	function validateForm(){
    var x = document.forms["register"]["name"].value;
    if (x == null || x == "") {
      	text="Please enter a valid name";
      	 document.getElementById("1").innerHTML =text;
      	 return false;
       
   }else 
   		document.getElementById("1").innerHTML ="";
   var x = document.forms["register"]["username"].value;
    if (x == null || x == "") {
      	text="Please enter a valid username. Can only contain alphabets, numbers.";
      	 document.getElementById("2").innerHTML =text;
      	 return false;
       
   } else 
   		document.getElementById("2").innerHTML ="";
   var x = document.forms["register"]["password"].value;
    if (x == null || x.length<8) {
      	text="Please enter a valid password. Must contain at least 8 characters.";
      	document.getElementById("3").innerHTML =text;
      	 return false;

   	}else 
   		document.getElementById("3").innerHTML ="";
   	if ( document.forms["register"]["password"].value!= document.forms["register"]["confirm-password"].value) {
   		text="The passwords do not match";
   		document.getElementById("4").innerHTML =text;
      	 return false;
   	}else 
   		document.getElementById("8").innerHTML ="";
    var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

    if (document.forms["register"]["email"].value.search(emailRegEx) == -1){
        text="Enter a valid email address"  	
        document.getElementById("8").innerHTML =text;
        return false;
     }
      var x = document.forms["register"]["phone"].value;
    if (x == null || x == "") {
      	text="Please enter a valid Phone Number";
      	 document.getElementById("5").innerHTML =text;
      	 return false;
       
   }else 
   		document.getElementById("5").innerHTML ="";
   	 var x = document.forms["register"]["birthday"].value;
    if (x == null || x == "") {
      	text="Please enter a valid date";
      	 document.getElementById("6").innerHTML =text;
      	 return false;
       
   }else 
   		document.getElementById("6").innerHTML ="";
   		 var x = document.forms["register"]["name"].value;
    if (x == null || x == "") {
      	text="Please enter a valid name";
      	 document.getElementById("6").innerHTML =text;
      	 return false;
       
   }else 
   		document.getElementById("1").innerHTML ="";
   	var x = document.forms["register"]["credit"].value;
    if (x == null || x == "") {
      	text="Please enter a valid Credit Card No.";
      	 document.getElementById("7").innerHTML =text;
      	 return false;
       
   }else 
   		document.getElementById("7").innerHTML ="";
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
						<a href="" class="active dropbtn">
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
	<div>
		<div class="login">
		<p>
			<?php 
				if(isset($_SESSION['err'])){
					echo $_SESSION['err'];
					unset($_SESSION['err']);
				}
			 ?>
		</p>
			<h2>SIGN IN to buy and sell right now!</h2>
			
			<form name="register" class="login-form" method="post" action="validation.php" onsubmit="return validateForm()">
			<input type="text" name="name" placeholder="Name"  > <span id="1"></span>
	     	<input type="text" name="username" placeholder="username"/><span id="2"></span>
	      	<input type="password" name="password" placeholder="password"/><span id="3"></span>
	      	<input type="password" name="confirm-password" placeholder="confirm password"/><span id="4"></span>
	    	<input type="number" name="phone" placeholder="Phone Number"><span id="5"></span>
	    	<input type="date" name="birthday" placeholder="birthday"><span id="6"></span>
	   		<select name="gender">
	   			<option value="Male">Male</option>
	   			<option value="Female">Female</option>
	   		</select> 
	   		<input type="Number" name="credit" placeholder="Credit Card No."><span id="7"></span>
	    	<input type="text" name="email" placeholder="email"><span id="8"></span>
			<button type="submit">Create account</button>
	      	<p class="message">Already have an account?<a href="userlogin.php">Sign in</a></p>
	    	</form>
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