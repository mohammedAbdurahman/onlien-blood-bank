<?php
$id=$_GET['id'];
$fname=$_GET['fname'];
$email=$_GET['email'];
$address=$_GET['address'];
$mobile=$_GET['mobile'];
$gender=$_GET['gender'];
$blood_group=$_GET['blood_group'];

include 'dbconnect.php';
$qry="update blood set fname='$fname', email='$email', address='$address', mobile='$mobile', gender='$gender', blood_group='$blood_group' where id='$id' ";
$result=mysqli_query($conn,$qry);
if($qry){
	echo "Data sucessfully updated";
	header('location:dashboard.php');
}
else{
	echo "Error";
}
?>