<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title> sign in</title>
        <!-- Bootsttrap CSS -->
        <link rel='stylesheet' href='css/bootstrap.css'/>
         <link rel='stylesheet' href='css/all.min.css'/>
        <link rel='stylesheet' href='css/style.css'/>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        
    </head> 
<body>
     <nav class="navbar  navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Online <span>Blood Bank</span></a>
        </div>

    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.html">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="blood bank.html">Blood Bank</a></li>
        <li><a href="donorhome.html">Donor</a></li>
       <li><a href="Patient.html">Patient</a></li>
             <li><a href="#">Report</a></li>
             <li><a href="#">About us</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

     <div class="banner text-center ">
            <img src="images/header.jpg" alt="...">
            </div>
    <div class="line"></div>
    <div class="title  text-center">
        
            <h1>Welcome, Admin</h1>
    </div>
     <div class="container ">
    <div class="title2">
        <h4>Below are the list of the people who are registered as donors.</h4>
    </div>
</div>

<?php
include 'dbconnect.php';

$qry="Select * from blood";
$result=mysqli_query($conn,$qry);

echo"<table border='1' id='customers'>
      <tr>
                <th>First Name</th>
                <th>email</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th colspan=2>Operations</th>
            </tr>";


while($row=mysqli_fetch_array($result)){
    echo "<tr>
                <td>".$row['fname']."</td>
                <td>".$row['email']."</td>
                <td>".$row['address']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['gender']."</td>
                <td>".$row['blood_group']."</td>
                <td><a href='editform.php?id=".$row['id']."'>Edit</td>
                <td><a href='delete.php?id=".$row['id']."' >Delete</td>
                

                
        </tr>";
    
}
?>    



  

</body>


 <script src="js/jquery.mn.js"></script>
    <script src="js/bootstrap.min.js"></script> 
  <script src="js/main.js"></script>

</html>
