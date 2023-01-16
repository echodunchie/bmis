<?php
if(isset($_POST['btn_add'])){
    $txt_householdno = $_POST['txt_householdno'];
    $txt_totalmembers = $_POST['txt_totalmembers'];
    $txt_lname = $_POST['txt_lname'];
    $txt_fname = $_POST['txt_fname'];
    $txt_mname = $_POST['txt_mname'];
    $txt_email = $_POST['txt_email'];
    $txt_mobile = $_POST['txt_mobile'];
    $ddl_gender = $_POST['ddl_gender'];
    $txt_bdate = $_POST['txt_bdate'];
    $txt_bplace = $_POST['txt_bplace'];

    //$txt_age = $_POST['txt_age'];
    $dateOfBirth = $txt_bdate;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $txt_age = $diff->format('%y');

    $txt_brgy = $_POST['txt_brgy'];
    $txt_dperson = $_POST['txt_dperson'];
    $txt_zone = $_POST['txt_zone'];
    $txt_rthead = $_POST['txt_rthead'];
    $txt_cstatus = $_POST['txt_cstatus'];
    $txt_occp = $_POST['txt_occp'];
    $txt_es = $_POST['txt_es'];
    $txt_income = $_POST['txt_income'];
    $txt_length = $_POST['txt_length'];
    $txt_religion = $_POST['txt_religion'];
    $txt_national = $_POST['txt_national'];
   
    $ddl_eattain = $_POST['ddl_eattain'];
    $txt_uname = $_POST['txt_uname'];
    $txt_upass = $_POST['txt_upass'];
    $hash_pass = password_hash($txt_upass, PASSWORD_DEFAULT);

    $name = basename($_FILES['txt_image']['name']);
    $temp = $_FILES['txt_image']['tmp_name'];
    $imagetype = $_FILES['txt_image']['type'];
    $size = $_FILES['txt_image']['size'];

    $milliseconds = round(microtime(true) * 1000);
    $image = $milliseconds.'_'.$name;

    if(isset($_SESSION['role'])){
        $action = 'Added Resident named '.$txt_lname.', '.$txt_fname.' '.$txt_mname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    $su = mysqli_query($con,"SELECT * from tblresident where username = '".$txt_uname."' ");
    $ct = mysqli_num_rows($su);
    
    if($ct == 0){

        if($name != ""){
            if(($imagetype=="image/jpeg" || $imagetype=="image/png" || $imagetype=="image/bmp") && $size<=2048000){
                    if(move_uploaded_file($temp, 'image/'.$image))
                    {
                    $txt_image = $image;
                    $query = mysqli_query($con,"INSERT INTO tblresident (
                                        householdno,
                                        totalhouseholdmembers,
                                        lname,
                                        fname,
                                        mname,
                                        email,
                                        mobile_number,
                                        bdate,
                                        bplace,
                                        age,
                                        barangay,
                                        zone,
                                        differentlyabledperson,
                                        relationtohead,
                                        civilstatus,
                                        occupation,
                                        es,
                                        monthlyincome,
                                        householdnum,
                                        lengthofstay,
                                        religion,
                                        nationality,
                                        gender,
                                        highestEducationalAttainment,
                                        image,
                                        username,
                                        password
                                    ) 
                                    values (
                                        '$txt_householdno', 
                                        '$txt_totalmembers', 
                                        '$txt_lname', 
                                        '$txt_fname', 
                                        '$txt_mname',  
                                        '$txt_email', 
                                        '$txt_mobile', 
                                        '$txt_bdate', 
                                        '$txt_bplace',
                                        '$txt_age',
                                        '$txt_brgy',
                                        '$txt_zone',
                                        '$txt_dperson',
                                        '$txt_rthead',
                                        '$txt_cstatus',
                                        '$txt_occp',
                                        '$txt_es',
                                        '$txt_income',
                                        '$txt_householdno',
                                        '$txt_length',
                                        '$txt_religion',
                                        '$txt_national',
                                        '$ddl_gender',
                                        '$ddl_eattain', 
                                        '$txt_image',
                                        '$txt_uname', 
                                        '$hash_pass'
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
             
        $query = mysqli_query($con,"INSERT INTO tblresident (
                                        householdno,
                                        lname,
                                        fname,
                                        mname,
                                        email,
                                        mobile_number,
                                        bdate,
                                        bplace,
                                        age,
                                        barangay,
                                        zone,
                                        totalhousehold,
                                        differentlyabledperson,
                                        relationtohead,
                                        civilstatus,
                                        occupation,
                                        es,
                                        monthlyincome,
                                        householdnum,
                                        lengthofstay,
                                        religion,
                                        nationality,
                                        gender,
                                        highestEducationalAttainment,
                                        image,
                                        username,
                                        password
                                    ) 
                                    values (
                                        '$txt_householdno', 
                                        '$txt_lname', 
                                        '$txt_fname', 
                                        '$txt_mname', 
                                        '$txt_email', 
                                        '$txt_mobile',  
                                        '$txt_bdate', 
                                        '$txt_bplace',
                                        '$txt_age',
                                        '$txt_brgy',
                                        '$txt_zone',
                                        '$txt_householdmem',
                                        '$txt_dperson',
                                        '$txt_rthead',
                                        '$txt_cstatus',
                                        '$txt_occp',
                                        '$txt_es',
                                        '$txt_income',
                                        '$txt_householdno',
                                        '$txt_length',
                                        '$txt_religion',
                                        '$txt_national',
                                        '$ddl_gender',
                                        '$ddl_eattain', 
                                        '$txt_image',
                                        '$txt_uname', 
                                        '$hash_pass'
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


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_lname = $_POST['txt_edit_lname'];
    $txt_edit_fname = $_POST['txt_edit_fname'];
    $txt_edit_mname = $_POST['txt_edit_mname'];
    $txt_edit_bdate = $_POST['txt_edit_bdate'];
    $txt_edit_email = $_POST['txt_edit_email'];
    $txt_edit_mobile = $_POST['txt_edit_mobile'];
    $txt_edit_bplace = $_POST['txt_edit_bplace'];

    $dateOfBirth = $txt_edit_bdate;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $txt_edit_age = $diff->format('%y');

    $txt_edit_brgy = $_POST['txt_edit_brgy'];
    $txt_edit_dperson = $_POST['txt_edit_dperson'];
    $txt_edit_zone = $_POST['txt_edit_zone'];
    $txt_edit_rthead = $_POST['txt_edit_rthead'];
    $txt_edit_cstatus = $_POST['txt_edit_cstatus'];
    $txt_edit_occp = $_POST['txt_edit_occp'];
    $txt_edit_es = $_POST['txt_edit_es'];
    $txt_edit_income = $_POST['txt_edit_income'];
    $txt_edit_length = $_POST['txt_edit_length'];
    $txt_edit_religion = $_POST['txt_edit_religion'];
    $txt_edit_national = $_POST['txt_edit_national'];
    $ddl_edit_gender = $_POST['ddl_edit_gender'];
    $ddl_edit_eattain = $_POST['ddl_edit_eattain'];

    $txt_edit_uname = $_POST['txt_edit_uname'];
    $txt_edit_upass = $_POST['txt_edit_upass'];
    $hash_pass = password_hash($txt_edit_upass, PASSWORD_DEFAULT);

    $name = basename($_FILES['txt_edit_image']['name']);
    $temp = $_FILES['txt_edit_image']['tmp_name'];
    $imagetype = $_FILES['txt_edit_image']['type'];
    $size = $_FILES['txt_edit_image']['size'];

    $milliseconds = round(microtime(true) * 1000);
    $image = $milliseconds.'_'.$name;

    if(isset($_SESSION['role'])){
        $action = 'Update Resident named '.$txt_edit_lname.', '.$txt_edit_fname.' '.$txt_edit_mname;
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
                $update_query = mysqli_query($con,"UPDATE tblresident set 
                                        lname = '".$txt_edit_lname."',
                                        fname = '".$txt_edit_fname."',
                                        mname = '".$txt_edit_mname."',
                                        email = '".$txt_edit_email."',
                                        mobile_number = '".$txt_edit_mobile."',

                                        bplace = '".$txt_edit_bplace."',
                                        bdate = '".$txt_edit_bdate."',
                                        age = '".$txt_edit_age."',
                                        barangay = '".$txt_edit_brgy."',
                                        zone = '".$txt_edit_zone."',
                                        differentlyabledperson = '".$txt_edit_dperson."',
                                        relationtohead = '".$txt_edit_rthead."',
                                        
                                        civilstatus = '".$txt_edit_cstatus."',
                                        occupation = '".$txt_edit_occp."',
                                        es = '".$xt_edit_es."',
                                        monthlyincome = '".$txt_edit_income."',
                                        lengthofstay = '".$txt_edit_length."',
                                        religion = '".$txt_edit_religion."',
                                        nationality = '".$txt_edit_national."',
                                        gender = '".$ddl_edit_gender."',
                                        highestEducationalAttainment = '".$ddl_edit_eattain."',
                                  
                                        image = '".$txt_edit_image."',
                                        username = '".$txt_edit_uname."',
                                        password = '". $hash_pass."'
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

        $chk_image = mysqli_query($con,"SELECT * from tblresident where id = '".$_POST['hidden_id']."' ");
        $rowimg = mysqli_fetch_array($chk_image);

        $txt_edit_image = $rowimg['image'];
        $update_query = mysqli_query($con,"UPDATE tblresident set 
                                        lname = '".$txt_edit_lname."',
                                        fname = '".$txt_edit_fname."',
                                        mname = '".$txt_edit_mname."',
                                        email = '".$txt_edit_email."',
                                        mobile_number = '".$txt_edit_mobile."',
                                        bplace = '".$txt_edit_bplace."',
                                        bdate = '".$txt_edit_bdate."',
                                        age = '".$txt_edit_age."',
                                        barangay = '".$txt_edit_brgy."',
                                        zone = '".$txt_edit_zone."',
                                        differentlyabledperson = '".$txt_edit_dperson."',
                                        relationtohead = '".$txt_edit_rthead."',
                                        civilstatus = '".$txt_edit_cstatus."',
                                        occupation = '".$txt_edit_occp."',
                                        es = '".$xt_edit_es."',
                                        monthlyincome = '".$txt_edit_income."',
                                        lengthofstay = '".$txt_edit_length."',
                                        religion = '".$txt_edit_religion."',
                                        nationality = '".$txt_edit_national."',
                                        gender = '".$ddl_edit_gender."',
                                        highestEducationalAttainment = '".$ddl_edit_eattain."',
                                        image = '".$txt_edit_image."',
                                        username = '".$txt_edit_uname."',
                                        password = '". $hash_pass."'
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
    $delete_query = mysqli_query($con,"DELETE from tblresident where id = '$id' ");
            
    if($delete_query)
    {
        $_SESSION['delete'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }

}


?>