<?php

if(isset($_POST['btn_add'])){

    $txt_fname = $_POST['txt_fname'];
    $txt_mname = $_POST['txt_mname'];
    $txt_lname = $_POST['txt_lname'];
    $txt_uname = $_POST['txt_uname'];
    $txt_pass = $_POST['txt_pass'];
    $hash_pass = password_hash($txt_pass, PASSWORD_DEFAULT);


    $action = 'Added  Name '.$txt_name;
    $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");

    $query = mysqli_query($con,"SELECT * from tblcensus where username = '".$txt_uname."' ");
    $query_census = mysqli_query($con, "INSERT INTO tblcensus (fname,mname,lname,username,password) values ('$txt_fname', '$txt_mname', '$txt_lname', '$txt_uname', '$hash_pass')");

    if($query && $query_census){
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }
    else{
        $_SESSION['duplicateuser'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    } 
}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_fname = $_POST['txt_edit_fname'];
    $txt_edit_mname = $_POST['txt_edit_mname'];
    $txt_edit_lname = $_POST['txt_edit_lname'];
    $txt_edit_uname = $_POST['txt_edit_uname'];
    $txt_edit_pass = $_POST['txt_edit_pass'];
    $hash_pass = password_hash($txt_edit_pass, PASSWORD_DEFAULT);

    $action = 'Update name  '.$txt_edit_busname;
    $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");

    $query = mysqli_query($con,"SELECT * from tblcensus where username = '".$txt_edit_uname."' ");
    $update_query = mysqli_query($con, "UPDATE tblcensus set fname = '" . $txt_edit_fname . "',  mname = '" . $txt_edit_mname . "',  lname = '" . $txt_edit_lname . "', username = '" . $txt_edit_uname . "', password = '" . $hash_pass . "' where id = '" . $txt_id . "' ");
    
    if($query && $update_query){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
    else{
        $_SESSION['duplicateuser'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    } 
}

if(isset($_POST['btn_delete']))
{
    $id = $_POST['hidden_id'];
    $delete_query = mysqli_query($con,"DELETE from tblcensus where id = '$id' ");
            
    if($delete_query)
    {
        $_SESSION['delete'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
   
}

if(isset($_POST['btn_archive']))
{   
    $archive_status = 1; // 0 - archive yes 0 - not archive
    $archive_query = mysqli_query($con, "UPDATE `tblcensus` SET `statusArchive`=$archive_status");

    if ($archive_query) {
        $_SESSION['archived'] = 1;
        header("location: " . $_SERVER['REQUEST_URI']);
    }
}   


?>