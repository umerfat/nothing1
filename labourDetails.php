<?php include "includes/header.php"; ?>

<?php include "includes/top-bar.php"; ?>

<?php include "includes/nav.php"; ?>

<!-- Single Product -->
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
                <span class="rating">
                  <a href="javascript::void(0)">3 Reviews</a>
                </span>
                <span class="price">
                  <del>
                    <span>Rs.1550.00</span>
                  </del>
                  <ins>
                    <span class="ammount">Rs.1250.00</span>
                  </ins>
                </span>
                <p class="product-description">Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles.</p>

                <ul class="product-actions clearfix">
                    <li>
                        <a href="#" class="btn btn-color btn-lg add-to-cart left"><span>Add to Hire</span></a>
                    </li>
                </ul>
            </div> <!-- end col product description -->
        </div> <!-- end row -->

        <!-- tabs -->
        <div class="row">
            <div class="col-md-12">
                <div class="tabs tabs-bb">
                    <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab-info" data-toggle="tab">Information</a>
                    </li>
                    <li>
                        <a href="#tab-description" data-toggle="tab">Description</a>
                    </li>
                    <li>
                        <a href="#tab-reviews" data-toggle="tab">Reviews</a>
                    </li>
                    </ul> <!-- end tabs -->

                    <!-- tab content -->
                    <div class="tab-content">

                        <div class="tab-pane fade" id="tab-description">
                            <p>
                                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original.
                            </p>
                        </div>

                        <div class="tab-pane fade in active" id="tab-info">
                            <table class="table">

                                <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>Louis Lane</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td>Carpenter</td>
                                </tr>
                                <tr>
                                    <th>Skills</th>
                                    <td>Carpenter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="tab-reviews">

                            <div class="reviews">
                                <ul class="reviews-list">
                                    <li>
                                        <div class="review-body">
                                            <div class="review-content">
                                                <p class="review-author"><strong>Batman</strong> - May 6, 2017 at 12:48 pm</p>
                                                <div class="rating">
                                                    <a href="#"></a>
                                                </div>
                                                <p>I know who superman is......</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="review-body">
                                            <div class="review-content">
                                                <p class="review-author"><strong>Superman</strong> - January 16, 2017 at 01:25 pm</p>
                                                <div class="rating">
                                                    <a href="#"></a>
                                                </div>
                                                <p>Iam seeing you batman... right now</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div> <!--  end reviews -->
                        </div>

                    </div> <!-- end tab content -->

                </div>
            </div> <!-- end tabs -->
        </div> <!-- end row -->


    </div> <!-- end container -->
</section> <!-- end single product -->

<?php include "includes/footer.php"; ?>
