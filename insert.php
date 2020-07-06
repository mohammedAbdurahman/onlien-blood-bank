<?php

	if(isset($_POST['fname'])){
		$fname=$_POST['fname'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$mobile=$_POST['mobile'];
		$gender=$_POST['gender'];
		$blood_group=$_POST['blood_group'];

		$servername="localhost";
		$username="root";
		$password="";
		$dbname="doner";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die("Error while connecting...");
	}
	
	$qry="insert into blood(fname,email,address,mobile,gender,blood_group) values ('$fname','$email','$address','$mobile','$gender','$blood_group')";
	$result=mysqli_query($conn,$qry);

	if($result){
		echo"Thanks for registering as a Donor";
	}
	else{
		echo"Error while inserting data";

	
	}

	}
	else{
		echo"Go back to registration page";
	}
?>