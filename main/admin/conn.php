<?php 



$host = "localhost";

$user = "u896944858_root";

$password= ">!8|tgSu9J";

$dbname = "u896944858_db_barangay";

// password for live database

// >!8|tgSu9J 



$con = mysqli_connect($host, $user, $password, $dbname);

if($con){
    // echo "successfuly connect";
}
else{
   echo "Not connect";
}