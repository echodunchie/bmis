<?php
if(isset($_POST['btn_add'])){
   $ddl_pos = $_POST['ddl_pos'];
    $txt_cname = $_POST['txt_cname'];
    $txt_contact = $_POST['txt_contact'];
    $txt_address = $_POST['txt_address'];
    $txt_sterm = $_POST['txt_sterm'];
    $txt_eterm = $_POST['txt_eterm'];
    

    $name = basename($_FILES['txt_image']['name']);
    $temp = $_FILES['txt_image']['tmp_name'];
    $imagetype = $_FILES['txt_image']['type'];
    $size = $_FILES['txt_image']['size'];

    $milliseconds = round(microtime(true) * 1000);
    $image = $milliseconds.'_'.$name;

    if(isset($_SESSION['role'])){
        $action = 'Added Official named '.$txt_cname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    
    
    
    if($ct == 0){

        if($name != ""){
            if(($imagetype=="image/jpeg" || $imagetype=="image/png" || $imagetype=="image/bmp") && $size<=2048000){
                    if(move_uploaded_file($temp, 'image/'.$image))
                    {
                    $txt_image = $image;
                    $query = mysqli_query($con,"INSERT INTO tblofficial (
                                        sposition,
                                        completeName,
                                        pcontact,
                                        paddress,
                                        termStart,
                                        termEnd,
                                        image
                                        
                                    ) 
                                    values (
                                        '$ddl_pos', 
                                        '$txt_cname', 
                                        '$txt_contact',  
                                        '$txt_address', 
                                        '$txt_sterm',
                                        '$txt_eterm',
                                        '$txt_image'
                                    )"
                            ) 
                            or die('Error: ' . mysqli_error($con));
                    }
            }
            else
            {
                $_SESSION['filesize'] = 1; 
                header ("location: ".$_SERVER['REQUEST_URI']);
            }
        }
        else
        {
             $txt_image = 'default.png';
             
        $query = mysqli_query($con,"INSERT INTO tblofficial (
                                        sposition,
                                        completeName,
                                        pcontact,
                                        paddress,
                                        termStart,
                                        termEnd,
                                        image
                                        
                                    ) 
                                    values (
                                        '$ddl_pos', 
                                        '$txt_cname', 
                                        '$txt_contact',  
                                        '$txt_address', 
                                        '$txt_sterm',
                                        '$txt_eterm',
                                        '$txt_image'
                                    )"
                            ) 
                            or die('Error: ' . mysqli_error($con));
             
        }

        
            if($query == true)
            {
                $_SESSION['added'] = 1;
                header ("location: ".$_SERVER['REQUEST_URI']);
            }
    }
    else{
        $_SESSION['duplicateuser'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }    

}

if(isset($_POST['btn_archive']))
{   
    $archive_status = 1; // 0 - archive yes 0 - not archive
    $archive_query = mysqli_query($con, "UPDATE `tblofficial` SET`statusArchive`=$archive_status") or die('Error: ' . mysqli_error($con));

    if ($archive_query == true) {
        $_SESSION['archived'] = 1;
        header("location: " . $_SERVER['REQUEST_URI']);
    }
}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_cname = $_POST['txt_edit_cname'];
    $txt_edit_contact = $_POST['txt_edit_contact'];
    $txt_edit_address = $_POST['txt_edit_address'];
    $txt_edit_sterm = $_POST['txt_edit_sterm'];
    $txt_edit_eterm = $_POST['txt_edit_eterm'];

    $name = basename($_FILES['txt_edit_image']['name']);
    $temp = $_FILES['txt_edit_image']['tmp_name'];
    $imagetype = $_FILES['txt_edit_image']['type'];
    $size = $_FILES['txt_edit_image']['size'];

    $milliseconds = round(microtime(true) * 1000);
    $image = $milliseconds.'_'.$name;

    if(isset($_SESSION['role'])){
        $action = 'Update Official named '.$txt_edit_cname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

$su = mysqli_query($con,"SELECT * from tblresident where username = '".$txt_edit_uname."' and id not in (".$txt_id.") ");
$ct = mysqli_num_rows($su);

if($ct == 0){

    if($name != ""){
            if(($imagetype=="image/jpeg" || $imagetype=="image/png" || $imagetype=="image/bmp") && $size<=2048000){
                if(move_uploaded_file($temp, 'image/'.$image))
                {

                $txt_edit_image = $image;
                $update_query = mysqli_query($con,"UPDATE tblofficial set 
                                        completeName = '".$txt_edit_cname."',
                                        pcontact = '".$txt_edit_contact."',
                                        paddress = '".$txt_edit_address."',
                                        termStart = '".$txt_edit_sterm."',
                                        termEnd = '".$txt_edit_eterm."',
                                        image = '".$txt_edit_image."'
                                        where id = '".$txt_id."'
                                ") or die('Error: ' . mysqli_error($con));
                }
            }
            else{
                $_SESSION['filesize'] = 1; 
                header ("location: ".$_SERVER['REQUEST_URI']);
            }
    }
    else{

        $chk_image = mysqli_query($con,"SELECT * from tblofficial where id = '".$_POST['hidden_id']."' ");
        $rowimg = mysqli_fetch_array($chk_image);

        $txt_edit_image = $rowimg['image'];
         $update_query = mysqli_query($con,"UPDATE tblofficial set 
                                        completeName = '".$txt_edit_cname."',
                                        pcontact = '".$txt_edit_contact."',
                                        paddress = '".$txt_edit_address."',
                                        termStart = '".$txt_edit_sterm."',
                                        termEnd = '".$txt_edit_eterm."',
                                        image = '".$txt_edit_image."'
                                        where id = '".$txt_id."'
                                ") or die('Error: ' . mysqli_error($con));
    }
        
        if($update_query == true){
            $_SESSION['edited'] = 1;
            header("location: ".$_SERVER['REQUEST_URI']);
        }

    }
    else{
        $_SESSION['duplicateuser'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }  

    
}

if(isset($_POST['btn_delete']))
{
    $id = $_POST['hidden_id'];
    $query = mysqli_query($con,"DELETE from tblofficial where id = '$id' ");
            
    if($query)
    {
        $_SESSION['delete'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}


?>