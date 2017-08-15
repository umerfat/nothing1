<?php include "includes/header.php"; ?>

<?php include "includes/side_top.php"; ?>

<?php include "includes/sidebar_menu.php"; ?>

<?php include "includes/top_nav.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Users</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                        <?php

                        if (isset($_GET['source'])){

                            $source = $_GET['source'];
                        }
                        else{
                            $source = "";
                        }
                        switch ($source){

                            case 'add_user':
                                include "includes/add_user.php";
                                break;

                            case 'edit_user':
                                include "includes/edit_user.php";
                                break;

                            default:
                                include "includes/view_all_users.php";
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
