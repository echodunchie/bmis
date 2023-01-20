<?php
if(isset($_POST['btn_add'])){
    $ddl_resident = $_POST['ddl_resident'];
    $txt_purpose = $_POST['txt_purpose'];
    $date = date('Y-m-d');

    $chkdup = mysqli_query($con,"SELECT * from tblclearance where purpose = ".$txt_purpose." ");
   

    if(isset($_SESSION['role'])){
        $action = 'Added Clearance with clearance name of '.$ddl_resident;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($num_rows == 0){
        if($_SESSION['role'] == "Administrator"){
        $query = mysqli_query($con,"INSERT INTO tblclearance (residentid,purpose,samount,dateRecorded,recordedBy,status) 
            values ('$ddl_resident','$txt_purpose', '$txt_amount', '$date', '".$_SESSION['username']."','Approved')") or die('Error: ' . mysqli_error($con));
        }
        else{
        $query = mysqli_query($con,"INSERT INTO tblclearance (residentid,purpose,samount,dateRecorded,recordedBy,status) 
            values ('$ddl_resident', '$txt_purpose', '$txt_amount', '$date', '".$_SESSION['username']."','New')") or die('Error: ' . mysqli_error($con));
        }
        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        }   
    }
    else{
        $_SESSION['duplicate'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }

    // to update icon of clearance counter
    $_SESSION['clearance_counter'] = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tblclearance WHERE claimStatus=''"));
}

if(isset($_POST['btn_req'])){
    $chkblot = mysqli_query($con,"select * from tblresident where '".$_SESSION['userid']."' not in (select complainant from tblblotter)");
    $num_row = mysqli_num_rows($chkblot);
    if($num_row > 0)
    {
        $chk = mysqli_query($con,"select * from tblresident where id = '".$_SESSION['userid']."' ");
        while($row = mysqli_fetch_array($chk)){

            if($row['lengthofstay'] < 6){
                $_SESSION['lengthofstay'] = 1;
                header ("location: ".$_SERVER['REQUEST_URI']);
            }
            else{
                $txt_purpose = $_POST['txt_purpose'];
                $date = date('Y-m-d');
                $reqquery = mysqli_query($con,"INSERT INTO tblclearance (residentid,purpose,samount,dateRecorded,recordedBy,status) 
                    values ('".$_SESSION['userid']."','$txt_purpose','','$date','".$_SESSION['role']."','New') ")or die('Error: ' . mysqli_error($con));

                if($reqquery == true)
                {
                    header ("location: ".$_SERVER['REQUEST_URI']);
                } 
            }
        }
    } 
    else{
        $_SESSION['blotter'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_approve']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_purpose = $_POST['txt_purpose'];

    $approve_query = mysqli_query($con,"UPDATE tblclearance set purpose= '".$txt_purpose."', status='Approved' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($approve_query == true){
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_disapprove']))
{

    $txt_id = $_POST['hidden_id'];
    $txt_purpose = $_POST['txt_purpose'];
    $disapprove_query = mysqli_query($con,"UPDATE tblclearance set purpose = '".$txt_purpose."' , status='Disapproved' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($disapprove_query == true){
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_purpose = $_POST['txt_edit_purpose'];
    $txt_edit_claim = $_POST['txt_edit_claim'];

    $update_query = mysqli_query($con,"UPDATE tblclearance set purpose = '".$txt_edit_purpose."', claimStatus = '". $txt_edit_claim."' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Update Clearance with clearance name of '.$txt_edit_purpose;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }

    // to update icon of clearance counter
    $_SESSION['clearance_counter'] = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tblclearance WHERE claimStatus=''"));

}

if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from tblclearance where id = '$value' ") or die('Error: ' . mysqli_error($con));
                    
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }

    // to update icon of clearance counter
    $_SESSION['clearance_counter'] = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tblclearance WHERE claimStatus=''"));
}

if(isset($_POST['btn_archive']))
{   
    $archive_status = 1; // 0 - archive yes 0 - not archive
    $archive_query = mysqli_query($con, "UPDATE `tblclearance` SET`statusArchive`=$archive_status") or die('Error: ' . mysqli_error($con));

    if ($archive_query == true) {
        $_SESSION['archived'] = 1;
        header("location: " . $_SERVER['REQUEST_URI']);
    }
}

?>