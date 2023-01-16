<?php
if(isset($_POST['btn_add'])){
    $ddl_resident = $_POST['ddl_resident'];
    $txt_sor = $_POST['txt_sor'];
    $date = date('Y-m-d');

    $chkdup = mysqli_query($con,"SELECT * from tblresidency where sor = ".$txt_sor." ");
   

    if(isset($_SESSION['role'])){
        $action = 'Added residencywith residency name of '.$ddl_resident;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($num_rows == 0){
        if($_SESSION['role'] == "Administrator"){
        $query = mysqli_query($con,"INSERT INTO tblresidency (residentid,sor,dateRecorded,recordedBy,status) 
            values ('$ddl_resident','$txt_sor','$date', '".$_SESSION['username']."','Approved')") or die('Error: ' . mysqli_error($con));
        }
        else{
        $query = mysqli_query($con,"INSERT INTO tblresidency (residentid,sor,dateRecorded,recordedBy,status) 
            values ('$ddl_resident', '$txt_sor', '$date', '".$_SESSION['username']."','New')") or die('Error: ' . mysqli_error($con));
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

    // to update icon counters
    $_SESSION['residency_counter'] = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tblresidency"));
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
                $txt_sor = $_POST['txt_sor'];
                $date = date('Y-m-d');
                $reqquery = mysqli_query($con,"INSERT INTO tblresidency (residentid,sor,dateRecorded,recordedBy,status) 
                    values ('".$_SESSION['userid']."','$txt_sor','$date','".$_SESSION['role']."','New') ")or die('Error: ' . mysqli_error($con));

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
    $txt_sor = $_POST['txt_sor'];

    $approve_query = mysqli_query($con,"UPDATE tblresidency set sor= '".$txt_sor."', status='Approved' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($approve_query == true){
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_disapprove']))
{

    $txt_id = $_POST['hidden_id'];
    $txt_sor = $_POST['txt_sor'];
    $disapprove_query = mysqli_query($con,"UPDATE tblresidency set sor = '".$txt_sor."' , status='Disapproved' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($disapprove_query == true){
        header("location: ".$_SERVER['REQUEST_URI']);
    }

}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_sor = $_POST['txt_edit_sor'];
    $txt_edit_claim = $_POST['txt_edit_claim'];

    $update_query = mysqli_query($con,"UPDATE tblresidency set sor = '".$txt_edit_sor."', claimStatus = '". $txt_edit_claim."' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Update residency with residency name of '.$txt_edit_sor;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }

}

if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from tblresidency where id = '$value' ") or die('Error: ' . mysqli_error($con));
                    
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
    // to update icon counters
    $_SESSION['residency_counter'] = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tblresidency"));
}

if(isset($_POST['btn_archive']))
{   
    $archive_status = 1; // 0 - archive yes 0 - not archive
    $archive_query = mysqli_query($con, "UPDATE `tblresidency` SET`statusArchive`=$archive_status") or die('Error: ' . mysqli_error($con));

    if ($archive_query == true) {
        $_SESSION['archived'] = 1;
        header("location: " . $_SERVER['REQUEST_URI']);
    }
}

?>