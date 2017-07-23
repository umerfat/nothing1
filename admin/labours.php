<?php include "includes/header.php"; ?>

<?php include "includes/side_top.php"; ?>

<?php include "includes/sidebar_menu.php"; ?>

<?php include "includes/top_nav.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Labours</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <?php

                        if (isset($_GET['labour'])){

                            $labour = $_GET['labour'];
                        }
                        else{
                            $labour = "";
                        }
                        switch ($labour){

                            case 'add_labour':
                                include "includes/add_labour.php";
                                break;

                            case 'edit_labour':
                                include "includes/edit_labour.php";
                                break;

                            default:
                                include "includes/view_all_labours.php";
                                break;
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>
