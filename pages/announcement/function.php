
<?php
if(isset($_POST['btn_add'])){
    $txt_phonea = $_POST['txt_phonea'];
    $txt_phoneb = $_POST['txt_phoneb'];
    $txt_phonec = $_POST['txt_phonec'];
    $txt_phoned = $_POST['txt_phoned'];
    $txt_phonee = $_POST['txt_phonee']; 
    $txt_phonef = $_POST['txt_phonef'];
    $txt_phoneg = $_POST['txt_phoneg'];    
    $txt_phoneh = $_POST['txt_phoneh'];
    $txt_email = $_POST['txt_email']; 
    $txt_objective = $_POST['txt_objective'];   
    $txt_mission = $_POST['txt_mission'];   
    $txt_vision = $_POST['txt_vision'];   
    $txt_goal = $_POST['txt_goal'];   

    if(isset($_SESSION['role'])){
        $action = 'Added'.$txt_phonea;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }


    //if($num_rows == 0){
        $query = mysqli_query($con,"INSERT INTO settings (phonea,phoneb,phonec,phoned,phonee,phonef,phoneg,phoneh,email,objective,mission,vision,goal) 
            values ('$txt_phonea', '$txt_phoneb', '$txt_phonec', '$txt_phoned', '$txt_phonee', '$txt_phonef', '$txt_phoneg', '$txt_phoneh', '$txt_email', '$txt_objective', '$txt_mission', '$txt_vision', '$txt_goal')") or die('Error: ' . mysqli_error($con));
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
    $txt_edit_phonea = $_POST['txt_edit_phonea'];
    $txt_edit_phoneb = $_POST['txt_edit_phoneb'];
    $txt_edit_phonec = $_POST['txt_edit_phonec'];
    $txt_edit_phoned = $_POST['txt_edit_phoned'];
    $txt_edit_phonee = $_POST['txt_edit_phonee'];
    $txt_edit_phonef = $_POST['txt_edit_phonef'];
    $txt_edit_phoneg = $_POST['txt_edit_phoneg'];
    $txt_edit_phoneh = $_POST['txt_edit_phoneh'];
    $txt_edit_email = $_POST['txt_edit_email'];
    $txt_edit_objective = $_POST['txt_edit_objective'];
    $txt_edit_mission = $_POST['txt_edit_mission'];   
    $txt_edit_vision = $_POST['txt_edit_vision'];   
    $txt_edit_goal = $_POST['txt_edit_goal']; 

    $update_query = mysqli_query($con,"UPDATE settings set phonea = '".$txt_edit_phonea."', phoneb = '".$txt_edit_phoneb."', phonec = '".$txt_edit_phonec."', phoned = '".$txt_edit_phoned."', phonee = '".$txt_edit_phonee."', phonef = '".$txt_edit_phonef."', phoneg = '".$txt_edit_phoneg."', phoneh = '".$txt_edit_phoneh."', email = '".$txt_edit_email."', objective = '".$txt_edit_objective."', mission = '".$txt_edit_mission."', vision = '".$txt_edit_vision."', goal = '".$txt_edit_goal."' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Updated '.$txt_edit_phonea;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}







?>