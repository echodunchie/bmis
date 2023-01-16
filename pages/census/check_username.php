<?php

include "../connection.php";

$result = mysqli_query($con, "select username from tbluser tblresident where username = '" . $_POST['username'] . "' ");
$result1 = mysqli_query($con,"select username from tblcensus where username = '".$_POST['username']."' ");
$result2 = mysqli_query($con, "select username from tblbstaff where username = '" . $_POST['username'] . "' ");
$result3 = mysqli_query($con, "select username from tblstaff where username = '" . $_POST['username'] . "' ");
$result4 = mysqli_query($con, "select username from tblresident where username = '" . $_POST['username'] . "' ");

$count = mysqli_num_rows($result);
$count1 = mysqli_num_rows($result1);
$count2 = mysqli_num_rows($result2);
$count3 = mysqli_num_rows($result3);
$count4 = mysqli_num_rows($result4);

print($count + $count1 + $count2 + $count3 + $count4);


?>