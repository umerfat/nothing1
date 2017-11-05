<?php include "includes/header.php"; ?>

<?php include "includes/side_top.php"; ?>

<?php include "includes/sidebar_menu.php"; ?>

<?php include "includes/top_nav.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Category</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                        <!--Calling php function for inserting categories-->
                        <?php if (isset($_POST['submit_category'])) {
                             insert_category();
                        } ?>
                        <?php if (isset($_POST['submit_sub_category'])) {
                             insert_sub_category();
                        } ?>
                        <form class="form-label-left" method="post"
                              id="add-category-form">
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <input id="name" class="form-control col-md-7
                                    col-xs-12" name="cat_name" placeholder="e.g Mason"
                                           type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                      <div class="col-md-6">
                                    <button class="btn btn-primary"
                                            type="reset">Reset</button>
                                    <button id="submit" name="submit_category"
                                            type="submit" class="btn
                                            btn-success">Add Category
                                    </button>
                                </div>
                        </div>
                        </form>
                        <div class="ln_solid"></div>
                        <form class="form-label-left" method="POST"
                              id="add-sub-category-form">
                            <div class="item form-group">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <input id="name" class="form-control col-md-7
                                    col-xs-12" name="sub_cat_name" placeholder="Add Subcategory"
                                           type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <select class="form-control" name="category_name" required>
                                        <option value="">All Categories</option>
                                        <?php
                                        global $connection;
                                        $select_sub_cat = "SELECT cat_id,cat_name FROM tbl_category";
                                        $result_sub_cat = mysqli_query($connection,$select_sub_cat);
                                        while($row = mysqli_fetch_assoc($result_sub_cat)){
                                        ?>
                                        <option value="<?php echo trim($row['cat_id']); ?>"><?php echo trim($row['cat_name'])?></option>
                                        <?php
                                        }
                                         ?>
                                        <!-- <option value="3">Farmer</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <div class="col-md-4">
                                    <button class="btn btn-primary"
                                            type="reset">Reset</button>
                                    <button id="submit" name="submit_sub_category"
                                            type="submit" class="btn
                                            btn-success">Add Sub Category0.
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="ln_solid"></div>
                        <?php
                        //update and include on clicking edit link
                        if (isset($_GET['edit'])){
                            $cat_id = $_GET['edit'];
                            include "includes/update_categories.php";
                        }
                        ?>

                        <table id="datatable-responsive" class="table table-striped
                        table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Take Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php findAllCategories(); ?>
                            <?php deleteCategories(); ?>

                            </tbody>
                        </table>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>
