<?php 
	session_start();
		$name=$_POST["name"];
		$username=$_POST["username"];
		$password=$_POST["password"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$birthday=$_POST["birthday"];
		$gender=$_POST["gender"];
		$credit=$_POST["credit"];
		 $conn=mysqli_connect("localhost","root","",'auction');
		 $sql="SELECT * FROM `user-info` WHERE `username`= '$username'";
		$result=mysqli_query($conn, $sql);
		$num_row = mysqli_num_rows($result);

		if($num_row==0){
		$sql="INSERT INTO `user-info`( `name`, `username`, `password`, `email`, `gender`, `phone`, `Birthday`, `credit card`) VALUES ('$name','$username','$password','$email','$gender','$phone','$birthday','$credit')";
		 if (mysqli_query($conn, $sql)) {
    			$_SESSION['created']="New Account Created Sucessfully";
    			header("location: userlogin.php");
			}
		}else {
			$_SESSION['err']="Username Already Taken";
			header('location:register.php');
		}
  	  
	 ?>