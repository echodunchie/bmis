
<?php
if(isset($_POST['btn_add'])){
    $txt_tdate = $_POST['txt_tdate'];
    $txt_title = $_POST['txt_title'];
    $txt_category = $_POST['txt_category'];
    $txt_descrip = $_POST['txt_descrip'];
    $txt_url = $_POST['txt_url']; 

    if(isset($_SESSION['role'])){
        $action = 'Added'.$txt_title;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }


    //if($num_rows == 0){
        $query = mysqli_query($con,"INSERT INTO news (title, category, descrip, url, tdate) 
            values ( '$txt_title', '$txt_category', '$txt_descrip', '$txt_url', '$txt_tdate')") or die('Error: ' . mysqli_error($con));
        $id = mysqli_insert_id($con);
       

        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        }     
    //}
    //else{
    //    $_SESSION['duplicate'] = 1;
    //    header ("location: ".$_SERVER['REQUEST_URI']);
    //}
}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    
    $txt_edit_title = $_POST['txt_edit_title'];
    $txt_edit_category = $_POST['txt_edit_category'];
    $txt_edit_descrip = $_POST['txt_edit_descrip'];
    $txt_edit_url = $_POST['txt_edit_url'];
    $txt_edit_tdate = $_POST['txt_edit_tdate'];

    $update_query = mysqli_query($con,"UPDATE news set title = '".$txt_edit_title."', category = '".$txt_edit_category."', descrip = '".$txt_edit_descrip."', url = '".$txt_edit_url."', tdate = '".$txt_edit_tdate."' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Updated '.$txt_edit_title;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}







?>