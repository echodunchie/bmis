
<section class="content">
    <div class="row">
        <div class="box">
            <div class="box-header">
                <div style="padding:10px;">
                    <button class="btn btn-primary btn-sm hidden" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Household</button>  
                    <?php if(!isset($_SESSION['staff'])) { ?>
                    <button class="btn btn-danger btn-sm hidden" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> 
                    <?php } ?>
                </div>                                
            </div>
            <div class="box-body table-responsive">
            <form method="post">
                <table id="table_house_hold" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Household #</th>
                            <th>Zone</th>
                            <th>Total Members</th>
                            <th>Head of Family</th>
                            <!-- <th style="width: 40px !important;">Option</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(!isset($_SESSION['staff']))
                            {   
                                $squery = mysqli_query($con, "select *,h.id as hid,h.zone as hzone,CONCAT(r.lname, ', ', r.fname, ' ', r.mname) as hname from tblhousehold h left join tblresident r on r.id = h.headoffamily WHERE `statusArchive` = 1");
                                while($row = mysqli_fetch_array($squery))
                                {
                                    echo '
                                    <tr>
                                        <td class="hidden"><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['hid'].'" /></td>
                                        <td><a href="../resident/resident.php?resident='.$row['householdno'].'">'.$row['householdno'].'</a></td>
                                        <td>'.$row['hzone'].'</td>
                                        <td>'.$row['totalhousehold'].'</td>
                                        <td>'.$row['hname'].'</td>
                                        <td class="hidden"><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['hid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
                                    </tr>
                                    ';

                                    include "edit_modal.php";
                                }
                            }
                            else{
                                $squery = mysqli_query($con, "select *,CONCAT(r.lname, ', ', r.fname, ' ', r.mname) as hname  from tblhousehold h left join tblresident r on r.id = h.headoffamily WHERE `statusArchive` = 1");
                                while($row = mysqli_fetch_array($squery))
                                {
                                    echo '
                                    <tr>
                                        <td class="hidden"><a href="../resident/resident.php?resident='.$row['householdno'].'">'.$row['householdno'].'</a></td>
                                        <td>'.$row['hzone'].'</td>
                                        <td>'.$row['totalhousehold'].'</td>
                                        <td>'.$row['hname'].'</td>
                                        <td class="hidden"><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['hid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></td>
                                    </tr>
                                    ';
                                    // include "edit_modal.php";
                                }
                            }
                        ?>
                    </tbody>
                </table>

                <?php // include "../deleteModal.php"; ?>

                </form>
            </div>
        </div>

        <?php // include "../edit_notif.php"; ?>

        <?php // include "../added_notif.php"; ?>

        <?php // include "../delete_notif.php"; ?>

        <?php // include "../duplicate_error.php"; ?>

        <?php // include "add_modal.php"; ?>

        <?php // include "function.php"; ?>
    </div> 
</section>

<script type="text/javascript">
    $(function() {
        $("#table_house_hold").dataTable({
            "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
        });
        $(".select2").select2();
    });
</script>