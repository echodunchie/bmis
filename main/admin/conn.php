<?php 



$host = "localhost";

$user = "root";

$password = "";

$dbname = "db_barangay";





$con = mysqli_connect($host, $user, $password, $dbname);

if($con){
    // echo "successfuly connect";
}
else{
   echo "Not connect";
}