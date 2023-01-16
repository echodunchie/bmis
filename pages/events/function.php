
<?php
if(isset($_POST['btn_add'])){
    $txt_date = $_POST['txt_date'];
    $txt_title = $_POST['txt_title'];
    $txt_category = $_POST['txt_category'];
    $txt_descrip = $_POST['txt_descrip'];
    $txt_url = $_POST['txt_url']; 
    
    if(isset($_SESSION['role'])){
        $action = 'Added'.$txt_title;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }


    //if($num_rows == 0){
        $query = mysqli_query($con,"INSERT INTO news (date,title,category,descrip,url) 
            values ('$txt_date', '$txt_title', '$txt_category', '$txt_descrip', '$txt_url')") or die('Error: ' . mysqli_error($con));
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
    $txt_edit_date = $_POST['txt_edit_date'];
    $txt_edit_title = $_POST['txt_edit_title'];
    $txt_edit_category = $_POST['txt_edit_category'];
    $txt_edit_descrip = $_POST['txt_edit_descrip'];
    $txt_edit_url = $_POST['txt_edit_url'];

    $update_query = mysqli_query($con,"UPDATE news set date = '".$txt_edit_date."', title = '".$txt_edit_title."', category = '".$txt_edit_category."', descrip = '".$txt_edit_descrip."', URL = '".$txt_edit_url."' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

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