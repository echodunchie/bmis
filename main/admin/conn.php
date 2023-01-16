<?php 



$host = "localhost";

$user = "root";

$password = "";

$dbname = "db_barangay";

// password for live database

// >!8|tgSu9J 



$con = mysqli_connect($host, $user, $password, $dbname);

if($con){
    // echo "successfuly connect";
}
else{
   echo "Not connect";
}