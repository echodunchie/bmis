<?php 



$host = "localhost";

$user = "u896944858_root";

$password= "";

$dbname = "u896944858_db_barangay";





$con = mysqli_connect($host, $user, $password, $dbname);

if($con){
    //echo "successfuly connect";
}
else{
   //echo "Not connect";
}