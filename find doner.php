<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Donor Registration</title>
        <!-- Bootsttrap CSS -->
        <link rel='stylesheet' href='css/bootstrap.css'/>
         <link rel='stylesheet' href='css/all.min.css'/>
        <link rel='stylesheet' href='css/style.css'/>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        
    </head>
    <body>

<?php
session_start();
include 'dbconnect.php';
$blood_group=$_POST['blood_group'];
$address=$_POST['address'];


$qry="select * from blood where blood_group='$blood_group' && address='$address'  ";
$result=mysqli_query($conn,$qry);
if($row=mysqli_fetch_array($result)){


echo"<table border='1' id='customers'>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Blood Group</th>
            </tr>";


    echo "<tr>
                <td>".$row['fname']."</td>
                <td>".$row['email_id']."</td>
                <td>".$row['address']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['gender']."</td>
                <td>".$row['blood_group']."</td>
         
                

                
        </tr>";
    
}else{
    echo "Username/Password didnt match";
}

?>    
<script src="js/jquery.mn.js"></script>
        <script src="js/bootstrap.min.js"></script>  
    </body>
</html>