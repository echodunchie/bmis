<?php		
			// Establishing Connection with Server by passing inputs as a parameter



 //$con = mysqli_connect('localhost','root','','u896944858_u896944858_db_barangay') or die(mysqli_error());


 $conn=mysql_connect("localhost", "u896944858_root", ">!8|tgSu9J") or die("Could not connect");
mysql_select_db("u896944858_db_barangay",$conn) or die("could not connect database");


			date_default_timezone_set("Asia/Manila");


?>