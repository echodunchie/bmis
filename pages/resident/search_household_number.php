<?php 

include "../connection.php";

$q = $_GET['q'];

if (!$q) {
    echo 'Household number is required';
    http_response_code(404); 
    exit;
}

$query = mysqli_query($con, "SELECT * from tblhousehold where householdno = '$q' LIMIT 1");

if (!$query->num_rows) {
    echo 'not_found';
    http_response_code(404); 
    exit;
}
//  else {
//     $query1 = mysqli_query($con, "TRUNCATE ishousehold");
//     $query2 = mysqli_query($con, "INSERT INTO `ishousehold`(`household_no`) VALUES ('$q')");
// }

while ($row = mysqli_fetch_array($query)) {
    $result = [
        'householdno' => $row['householdno'],
    ];
}




echo json_encode($result);
http_response_code(200); 
