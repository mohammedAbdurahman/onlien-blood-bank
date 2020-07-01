
<?php

        $servername="localhost";
        $username="root";
        $password="";
        $dbname="doner";

        $conn=mysqli_connect($servername,$username,$password,$dbname);



$qry="Select * from blood";
$result=mysqli_query($conn,$qry);

echo"<table border='1' id='customers'>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Blood Group</th>
 
            </tr>";


while($row=mysqli_fetch_array($result)){
    echo "<tr>
                <td>".$row['fname']."</td>
                <td>".$row['email_id']."</td>
                <td>".$row['address']."</td>
                <td>".$row['contact']."</td>
                <td>".$row['gender']."</td>
                <td>".$row['blood_group']."</td>
             

                
        </tr>";
    
}
?>    

