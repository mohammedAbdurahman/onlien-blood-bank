<?php
$servername="localhost";
$username="root";
$password="";
$dbname="doner";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
		die("Error while connecting...");

}
?>