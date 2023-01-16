<!DOCTYPE html>
<html>

<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("Location: ../../main/login.php");
} else {
    ob_start();
    include('../head_css.php'); ?>
    <style>
        .input-size {
            width: 418px;
        }
    </style>
    <body class="skin-black">
        <?php include "../connection.php"; ?>
        <?php include('../header.php'); ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?php include('../sidebar-left.php'); ?>
            <aside class="right-side">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="#officals" data-toggle="tab">Barangay Officials Archives</a></li>
                    <li role="presentation"><a href="#staff" data-toggle="tab">Staff Archives</a></li>
                    <li role="presentation"><a href="#census_worker" data-toggle="tab">Census Worker Archives</a></li>
                    <li role="presentation"><a href="#house_hold" data-toggle="tab">House Holds Archives</a></li>
                    <li role="presentation"><a href="#activity" data-toggle="tab">Activities Archives</a></li>
                    <li role="presentation"><a href="#tax_ordinances" data-toggle="tab">Tax Ordinances Archives</a></li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="tab">
                            Issue Certificates Archives<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li role="presentation"><a href="#clearance" data-toggle="tab">Clearance Archives</a></li>
                            <li role="presentation"><a href="#indigency" data-toggle="tab">Indigency Archives</a></li>
                            <li role="presentation"><a href="#residency" data-toggle="tab">Residency Archives</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="officals"><?php include "officials_archives.php"; ?></div>
                    <div class="tab-pane" id="staff"><?php include "staff_archives.php"; ?></div>
                    <div class="tab-pane" id="census_worker"><?php include "census_archives.php"; ?></div>
                    <div class="tab-pane" id="house_hold"><?php include "house_hold_archives.php"; ?></div>
                    <div class="tab-pane" id="activity"><?php include "activity_archives.php"; ?></div>
                    <div class="tab-pane" id="tax_ordinances"><?php include "tax_archives.php"; ?></div>
                    <div class="tab-pane" id="residency"><?php include "residency_archives.php"; ?></div>
                    <div class="tab-pane" id="clearance"><?php include "clearance_archives.php"; ?></div>
                    <div class="tab-pane" id="indigency"><?php include "indigency_archives.php"; ?></div>
                </div>
            </aside>
        </div>
    <?php } include "../footer.php"; ?>
    </body>
</html>