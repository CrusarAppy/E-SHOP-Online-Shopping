<?php 

	session_start();
	$username=$_POST["username"];
	$password=$_POST["password"];
	$conn=mysqli_connect("localhost","root","",'auction');
	$sql="SELECT * FROM `user-info` WHERE `username`= '$username' AND `password` ='$password' ";
	$result=mysqli_query($conn, $sql);
	$num_row = mysqli_num_rows($result);

	if($num_row==1){
		
		$row=mysqli_fetch_assoc($result);
		$_SESSION['username']=$row["username"];
		$_SESSION['name']=$row['name'];
		header('location: welcome.php');
	}else{
		$_SESSION['error']="INCORRECT USERNAME OR PASSWORD!";
		header("location: userlogin.php");
	}
		
	

 ?>