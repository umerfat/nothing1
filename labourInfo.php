<?php include "includes/header.php"; ?>

<?php include "includes/top-bar.php"; ?>

<?php include "includes/nav.php"; ?>

<section class="section-wrap single-product">
    <div class="container relative">
        <div class="row">

            <div class="col-sm-6 col-xs-12 mb-60">
                <div class="gallery-cell">
                    <a href="IMAGES/LABOUR_IMAGES/umercrop.png" class="lightbox-img">
                        <img src="IMAGES/LABOUR_IMAGES/umercrop.png" alt="" />
                    </a>
                </div>
            </div> <!-- end col img slider -->

            <div class="col-sm-6 col-xs-12 product-description-wrap">
                <h1 class="product-title">Louis Lane</h1>
                <span class="price">
                  <ins>
                    <span class="ammount">Rs.1250.00</span>
                  </ins>
                </span>
                <br>
                <div class="col-sm-12" style="padding-left: 0">
                    <form>
                        <div class="col-sm-6" style="padding-left: 0">
                            <div class="form-group">
                                <div class='input-group date' id='datepicker-labour-info1'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                               <span class="fa fa-calendar"></span>
                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class='input-group date' id='datepicker-labour-info2'>
                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                               <span class="fa fa-calendar"></span>
                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="padding-left: 0">
                            <div class="form-group">
                                <a class="btn btn-success" data-toggle="modal" href="#confirmModal" data-modal="confirmModal">Submit</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "labourConfirm.php"; ?>
<?php include "includes/footer.php"; ?>
