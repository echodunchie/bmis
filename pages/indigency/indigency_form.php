
<!DOCTYPE html>
<html id="clearance">
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 4mm; }
</style>

 <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../main/login.php"); 
    }
    
    ob_start();
    
    ?>
    <body class="skin-black" >

 <head>
    <meta charset="UTF-8">
    <title>Barangay Information System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../BarangaySystem/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../BarangaySystem/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../BarangaySystem/bootstrap/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../BarangaySystem/bootstrap/css/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../BarangaySystem/bootstrap/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="./BarangaySystem/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../BarangaySystem/bootstrap/css/select2.css" rel="stylesheet" type="text/css" />
    <script src="../BarangaySystem/bootstrap/css/jquery-1.12.3.js" type="text/javascript"></script>  
    
</head>
 <body class="skin-black" >
     <!-- header logo: style can be found in header.less -->
    
    
     <?php 
     
      include "../connection.php"; 

     ?>         
                
                <div class="col-xs-12 col-sm-5 col-md-8" style="background: white;  ">`
              
                   
                    <div class="pull-center" style="font-size: 16px;text-align: center;"><b>
                    <image src="s.png"  ALIGN="left" style="width:110px;height:110px;"></image>
                    <image src="buhi.png"  ALIGN="right" style="width:110px;height:110px;"></image> 
                        REPUBLIC OF THE PHILIPPINES<br>
                        PROVINCE OF CAMARINES SUR<br>
                        MUNICIPALITY OF BUHI<br>
                        BARANGAY SAGRADA FAMILIA<br>
                    </b>
                    <h2><b>OFFICE OF THE PUNONG BARANGAY</b></h2>
                   
                        
                    </div>

                    <hr>
                    <div class="pull-center" style="font-size: 16px;text-align: center;"><b>
                        <p class="text-center" style="font-size: 20px; font-size:bold;"><b style="font-size: 30px;">BARANGAY CERTIFICATION</b></p>   </div>

                        <?php  $qry1=mysqli_query($con,"SELECT * from tblresident r left join tblindigency c on c.residentid = r.id where residentid = '".$_GET['resident']."' and indigencyNo = '".$_GET['indigency']."' ");
                                while($row1 = mysqli_fetch_array($qry1)){
                        echo '<image src="../resident/image/'.basename($row1['image']).'" style="font-size: 18px; padding-left:3em; width:120px;height:120px;" align="left"  />';
                        }
                        ?>
                        <?php
                            $qry=mysqli_query($con,"SELECT * from tblresident r left join tblindigency c on c.residentid = r.id where residentid = '".$_GET['resident']."' and indigencyNo = '".$_GET['indigency']."' ");
                            while($row = mysqli_fetch_array($qry)){
                                $bdate = date_create($row['bdate']);
                                $date = date_create($row['dateRecorded']);
                                echo '
                                <p>
                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                     <label style="font-size:17px;margin-right:70%;"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.strtoupper(ucfirst($row['fname'])).'&nbsp;&nbsp;'.strtoupper(ucfirst($row['mname'])).'&nbsp;&nbsp;'.strtoupper(ucfirst($row['lname'])).'</b>  </label><br> 
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Zone'.strtoupper($row['zone']).', Sitio '.strtoupper($row['barangay']).', Sagrada Familia Buhi, Camarines Sur </b><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marital Status:&nbsp; &nbsp; <b>'.strtoupper($row['civilstatus']).'</b> &nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Citizenship: &nbsp; &nbsp;<b>'.strtoupper($row['nationality']).'</b><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PassPort No: <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject:  &nbsp;&nbsp;Certificate of Indigency</b><br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Issued:  &nbsp;&nbsp; '.strtoupper($row['dateRecorded']).'
                                    </p>

                                     ';
                            }
                            
                        ?>
                        
<?php
                            $qry=mysqli_query($con,"SELECT * from tblresident r left join tblindigency c on c.residentid = r.id where residentid = '".$_GET['resident']."' ");
                            while($row = mysqli_fetch_array($qry)){
                                $bdate = date_create($row['bdate']);
                                $date = date_create($row['dateRecorded']);
                                echo '
                
                
                </div><hr>
                
                 ';
                            }
                        ?>
            </div>
        </div>
</div>
<p style="font-size: 18px; padding-left:3em;">To whom it may concern:</p>
<?php
                            $qry=mysqli_query($con,"SELECT * from tblresident r left join tblindigency c on c.residentid = r.id where residentid = '".$_GET['resident']."' ");
                            while($row = mysqli_fetch_array($qry)){
                                $bdate = date_create($row['bdate']);
                                $date = date_create($row['dateRecorded']);
                                echo '
                   
                        <div class="pull-center" style="font-size: 16px;text-align: center;">
                        <p style="font-size: 18px; padding-left:3em; padding-right:3em; text-indent:100px;text-align: justify;">This is to certify that the person with other personal details above as per record is a bonafide resident of this barangay.
                       <div class="pull-center" style="font-size: 16px;text-align: center;">
                        <p style="font-size: 18px; padding-left:3em; padding-left:3em; text-indent:100px;text-align: justify;">This further certify that their only means of livelihood purely comes from the meager income. That said person only depends on the odd jobs to earn a living whose income does not exceed per annum. Thus their family belongs to indigenct sector of the community. 
                        <div class="pull-center" style="font-size: 16px;text-align: center;">
                        <p style="font-size: 18px; padding-left:3em; padding-left:3em; text-indent:100px;text-align: justify;">This certification is issued upon request of the above named person in order to attest on the foregoing facts and truth of their indigence and in order to avail '.strtoupper($row['purpose']).'.<br> 
                        <center> ---oOo--- ---oOo---</center>
                         <label style="font-size:17px;margin-center:70%;"><b><u>'.strtoupper(ucfirst($row['fname'])).'&nbsp;&nbsp;'.strtoupper(ucfirst($row['mname'])).'&nbsp;&nbsp;'.strtoupper(ucfirst($row['lname'])).'</u></b>  </label><br> 
                        <label style=" text-align: center;margin-center:73%">Signature Over Printed Name of Claimant</label><br>
                       <label style=" text-align: center;margin-right:73%">Prepared by:</label><br>
                          <label style="font-size:17px;margin-right:70%;"><b><u>MA. FELROSE C. SARTO</u></b></label><br>
                         <label style=" text-align: center;margin-right:73%">Barangay Secretary</label><br>
                       <label style=" text-align: center;margin-left:73%">Attested  by:</label><br>
                           <label style="font-size:17px;margin-left:70%;"><b><u>Hon. Miguela M. Martinez</u></b>  </label><br> 
                        <label style=" text-align: center;margin-left:73%">Punong Barangay</label><hr>

                    </div>
                                 ';
                            }
                        ?>
                        <label style=" text-align: center;margin-left:73%"><i>Applicant's Thumb Mark</i></label>
                        
<style>

.column {
  float: right;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<div class="row">
  <div class="column"  style="height:70px; width:100px; border: 2px solid black;">
   <center> <h5>LEFT</h5></center>
  </div>
  <div class="column"  style="height:70px; width:100px; border: 2px solid black;">
   <center> <h5>RIGHT</h5></center>
  </div>
</div>
             </div>
                </div>
                    </div> 
                    </div>
                <div class="col-xs-offset-8 col-xs-5 col-md-offset-8 col-md-4 "  >
                
                </div>
    <button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#indigency')">Print</button>
    </body></left>
    <?php
    
    ?>


    <script>
         function PrintElem(elem)
    {
        window.print();
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=1000');
        //mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        //mywindow.document.write('</head><body class="skin-black" >');
         var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        mywindow.document.write(data);
        //mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();

        printButton.style.visibility = 'visible';
        mywindow.close();

        return true;
    }

    </script>
</html>