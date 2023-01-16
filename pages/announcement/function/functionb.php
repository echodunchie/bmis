<?php
if(isset($_POST['btn_add'])){
    $txt_email = $_POST['txt_email'];
    

   
    if(isset($_SESSION['role'])){
        $action = 'Added  '.$txt_email;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }


    //if($num_rows == 0){
        $query = mysqli_query($con,"INSERT INTO settings (email) 
            values ('$txt_email')") or die('Error: ' . mysqli_error($con));
        $id = mysqli_insert_id($con);
        

        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        }     

}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_email = $_POST['txt_edit_email'];

    $update_query = mysqli_query($con,"UPDATE settings set email = '".$txt_edit_email."'  where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Updated '.$txt_edit_email;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}








?>