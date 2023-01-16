<?php
if(isset($_POST['btn_add'])){
    $txt_Purposes = $_POST['txt_Purposes'];
    $txt_fees = $_POST['txt_fees'];
    

   
    if(isset($_SESSION['role'])){
        $action = 'Added Tax ordinance '.$txt_Purposes;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }


    //if($num_rows == 0){
        $query = mysqli_query($con,"INSERT INTO tbltax (Purposes,fees) 
            values ('$txt_Purposes', '$txt_fees')") or die('Error: ' . mysqli_error($con));
        $id = mysqli_insert_id($con);
        if(isset($_FILES['files']))
        {
            foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name){

                $target="photo/";
                $milliseconds = round(microtime(true) * 1000);
                $name = $milliseconds.$_FILES['files']['name'][$key];
                $target=$target.$name;

                   
 
                }
        }

        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        }     

}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_Purposes = $_POST['txt_edit_Purposes'];
    $txt_edit_fees = $_POST['txt_edit_fees'];
   

    $update_query = mysqli_query($con,"UPDATE tbltax set Purposes = '".$txt_edit_Purposes."', fees = '".$txt_edit_fees."'  where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Update Tax Ordinance '.$txt_edit_Purposes;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_delete']))
{
    $id = $_POST['hidden_id'];
    $delete_query = mysqli_query($con,"DELETE from tbltax where id = '$id' ") or die('Error: ' . mysqli_error($con));

    if($delete_query == true)
    {
        $_SESSION['delete'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }

}


if(isset($_POST['btn_archive']))
{   
    $archive_status = 1; // 0 - archive yes 0 - not archive
    $archive_query = mysqli_query($con, "UPDATE `tbltax` SET `statusArchive` =$archive_status");

    if ($archive_query) {
        $_SESSION['archived'] = 1;
        header("location: " . $_SERVER['REQUEST_URI']);
    }
}



?>