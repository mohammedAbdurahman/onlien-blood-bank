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
             <div class="tiete text-center">
                 <h1>Welcome to ONLINE <span>BLOOD BANK</span></h1>
             </div>

<?php
if(isset($_GET['id'])){
   $id=$_GET['id']; 

include 'dbconnect.php';
$qry="select * from blood where id=$id";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){
    
?>



    
        <div class="content-doner">
     <div class="container ">
<h2>You are now in the Edit section</h2>
<div class="containerDiv">
<form action="update.php" method="GET">
 
    <div class="row">
        <div class="form-group col-md-6">
            <div class="col-md-3">
                <label>Name</label>
            </div>
    <div class="col-md-9">
         <input type="text" name="fname"  value="<?php echo $row['fname']; ?>" class="form-control" maxlength="50" placeholder="Enter name" required="" aria-required="true" autocomplete="off">
     </div>
     </div>
    <div class="form-group col-md-6">
            <div class="col-md-3">
                <label>Email ID </label>
            </div>
        <div class="col-md-9">
             <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" maxlength="100" placeholder="Enter email" autocomplete="off">
                <label id="emailduplicate" class="error" for="email" style="display: none;">Email already exist,Please try any other Email.
            </label>
         </div>
         </div>
         </div>
         <div class="row">
            <div class="form-group col-md-6">
                <div class="col-md-3">
                    <label for="mobile">Mobile Number</label>
                </div>
            <div class="col-md-9"> <!-- checkUserName(this.value,'uname') checkUserMobile(this.value,'mobileno') -->
                <div style="width:17%; margin-right: 1%;" class="form-control pull-left">249</div>
<input type="text" name="mobile"  value="<?php echo $row['mobile']; ?>"   class="form-control mobile" maxlength="10" placeholder="Enter mobile number" onblur="checkUserName(this.value,'uname'), fillUserName(this.value)" style="width:82%"utocomplete="off">
<label id="mobilenoduplicate" class="error" for="mobileno" style="display: none;">Mobile already exist,Please try any other mobile no</label>
                                                                         
</div>
</div>

<div class="form-group col-md-6">
<div class="col-md-3">
<label for="area">Address</label>
</div>
<div class="col-md-9">
<select name="address" value="<?php echo $row['address']; ?>" class="form-control form-group-margin ">
  <option value="">Select State</option>
  <option value="Khartoum">Khartoum</option>
  <option value="Khartoum North">Khartoum North</option>
  <option value="Omdurman">Omdurman</option>
</select>
        </div>
</div>

</div>
<div class="row">
<div class="form-group col-md-6">
<div class="col-md-3">
<label>Gender </label>
</div>
<div class="col-md-9">
<select class="form-control" name="gender" value="<?php echo $row['gender']; ?>" >
        <option value="volvo">Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
                                                                        
</div>
    </div>
<div class="form-group col-md-6">
 <div class="col-md-3">
<label>Blood Group </label>
</div>
<div class="col-md-9">
<select class="form-control" placeholder="select" name="blood_group" value="<?php echo $row['blood_group']; ?>" >
 <option value="volvo">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
</select>
                                                                        
</div>
</div>
</div>

    <div class="row">
<div class="text-center" style="margin-top: 10px;">
       <input type="hidden" name ="id" value="<?php echo $row['id']?>" >
<button type="submit" class="btn btn-success btn-lg defaultBtn" id="btnSubmit" name="btnSubmit" value="Submit">Update</button>



</div>
</div>
</form>

</div>
</div>
</div>
<?php
 } 
}
?>
  
  
</div>

</body>
</html>
