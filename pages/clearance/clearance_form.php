<!DOCTYPE html>
<html id="clearance">
<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 5mm; }
</style>
    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../main/login.php"); 
    }
    else
    {
    ob_start();
    $_SESSION['clr'] = $_GET['clearance'];
    include('../head_css.php'); ?>
    <body class="skin-black" >
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../connection.php";
        ?>

        <div class="col-xs-12 col-sm-5 col-md-8" style="background: white;  ">`
            
                   
                    <div class="pull-center" style="font-size: 16px;text-align: center;">
                    <image src="s.png"  ALIGN="left" style="width:120px;height:120px;"></image>
                    <image src="buhi.png"  ALIGN="right" style="width:120px;height:120px;"></image> 
                        REPUBLIC OF THE PHILIPPINES<br>
                        PROVINCE OF CAMARINES SUR<br>
                        MUNICIPALITY OF BUHI<br>
                        <b>BARANGAY SAGRADA FAMILIA</b><br>
                    
                    <h4><b>OFFICE OF THE PUNONG BARANGAY</b></h4>
                    <div style="background-color:   #ffbf00 ; padding: 2px; border: 1px solid gray;"><h2><b>
                    BARANGAY CLEARANCE</b></h2></div><br>
                        
                    </div>

        <div class="col-xs-12 col-sm-6 col-md-8" style="" >
            <div style=" background: black;" >
                <div class="col-xs-4 col-sm-6 col-md-3" style="background: white; margin-right:10px; ">
                    <center><image src="" style="height:100px;"/></center>
                    <div style="margin-top:20px; text-align: center; word-wrap: break-word;">
                        
                        ---oOo---
                        <br>
                        -
                        <br>
                        OR Number
                        <br><br>
                        -
                        <br>
                        Clearance Amount <br> <br>
                        <br>
                           Date issued <br> <br>
                           <b>Six (6) Months</b><br>
                           Validity of this CLEARANCE<br>from the Date of Issuance<br><br>
                           ---oOo---<br><br>
                           <b>OFFICIAL DOCUMENT<br>-Not Valid Without Seal- <br><br></b>

                        Date Printed: <br>
                        System Generated<br><br>
                        <i>Applicant's Thumb Mark</i>
<style>

.column {
  float: left;
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
<center>
<div class="row">
  <div class="column"  style="height:100px; width:100px; border: 2px solid black;">
   <center> <h5>LEFT</h5></center>
  </div>
  <div class="column"  style="height:100px; width:100px; border: 2px solid black;">
   <center> <h5>RIGHT</h5></center>
  </div>
</div></center>
                                               </div>
                       
                </div>
                <div class="col-xs-7 col-sm-5 col-md-8" style="background: white;  ">

                        <p style="font-size: 20px;"><b>TO WHOM IT MAY CONCERN:</b></p>
                      <?php  $qry1=mysqli_query($con,"SELECT * from tblresident r left join tblclearance c on c.residentid = r.id where residentid = '".$_GET['resident']."' and clearanceNo = '".$_GET['clearance']."' ");
                                while($row1 = mysqli_fetch_array($qry1)){
                        echo '<image src="../resident/image/'.basename($row1['image']).'" style="width:120px;height:120px;" align="right"/>';
                        }
                        ?>
                        <p style="text-indent:40px;text-align: justify;"><b>This is to certify that as per record, 
                            
                         the person whose name, photo and signature appearing herein has requested a CLEARANCE from this office with the following detail/s;</b></p>
                       
                       
                    <div class="pull-right" style="border: 2px solid black;">
                       
                    </div>  
                     <?php
                            $qry=mysqli_query($con,"SELECT * from tblresident r left join tblclearance c on c.residentid = r.id where residentid = '".$_GET['resident']."' and clearanceNo = '".$_GET['clearance']."' ");
                            while($row = mysqli_fetch_array($qry)){
                                $bdate = date_create($row['bdate']);
                                $date = date_create($row['dateRecorded']);
                                echo '
                                <p><br>
                                    Last Name:&nbsp; &nbsp; <b> '.strtoupper($row['lname']).'</b><br>
                                    First Name:&nbsp; &nbsp; <b>'.strtoupper($row['fname']).'</b><br>
                                    Middle Name:&nbsp; &nbsp; <b>'.strtoupper($row['mname']).'</b><br>
                                    Marital Status:&nbsp; &nbsp; <b>'.strtoupper($row['civilstatus']).'</b> &nbsp;
                                    Birthdate:&nbsp; <b>'.strtoupper(date_format($bdate,"m-d-Y")).' </b>&nbsp; &nbsp; Age:&nbsp; <b>'.strtoupper($row['age']).'</b><br>
                                    Citizenship: &nbsp; &nbsp;<b>'.strtoupper($row['nationality']).'</b><br>
                                    Lot No. Subd. Purok/Zone: &nbsp; &nbsp;<b> Zone '.strtoupper($row['zone']).', Sitio '.strtoupper($row['barangay']).'</b><br>
                                    Brgy./City-Municipality/Province: &nbsp; &nbsp;<b>Sagrada Famila Buhi, Camarines Sur</b><br>
                                    Purpose: &nbsp; &nbsp;<b>'.strtoupper($row['purpose']).'</b><br>
                                    Remarks: &nbsp; &nbsp;<b>NO DEROGATORY RECORD</b><br>
                               </p>
                                <p> <b> &nbsp;&nbsp;&nbsp;&nbsp;This certification is issued upon the request of the above subject for the purpose started.<br><br></b>
                                    Date Issued: <b> '.strtoupper(date_format($date,"F j, o")).'</b><br>
                                    
                                </b><br>
                                <center> <b>'.strtoupper($row['fname']).'<b> '.strtoupper($row['mname']).' <b>'.strtoupper($row['lname']).'<br>
                                Signature Over Printed Name of Claimant</b></center> <br><br> 

                                <p> <b>MA. FELROSE C. SARTO<b><br>
                                Barangay Secretary</p></left>
                                <p>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<b>HON. MIGUELA M. MARTINEZ</b></p>
                           <p> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Punong Barangay</p>
                                ';
                            }
                        ?>
                    
                <div class="col-xs-offset-6 col-xs-5 col-md-offset-6 col-md-4" ><br><br><br>
                    
                </div>
                <div class="col-xs-8 col-md-4">
                    
                </div>
                <div class="col-xs-3 pull-right" style="margin-bottom:40px;">
               
                </div>
            </div>
        </div>

    <button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#clearance')">Print</button>
    </body>

    <?php
    }
    ?>


    <script>
         function PrintElem(elem)
    {
        window.print();
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body class="skin-black" >');
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'visible';
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();

        printButton.style.visibility = 'visible';
        mywindow.close();

        return true;
    }
    </script>
</html>