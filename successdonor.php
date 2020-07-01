<?php
session_start(); //to start a session which store info
include 'dbconnect.php';
$u_name=$_POST['uname'];
$psw=$_POST['psw'];

$qry="select * from user where u_name='$u_name' && u_pass='$psw' "; //select the uname and pass value from the database and check
$result=mysqli_query($conn,$qry);
$count=mysqli_num_rows($result);
if($count>0){
	echo "Successfully logged in";
	$_SESSION['key']=$username; //'key' is a varaible
	header('location:donorhome.html'); //redirect the user to the dashboard.php page after login success
}else{
	echo "Username/Password didnt match";
}

?>