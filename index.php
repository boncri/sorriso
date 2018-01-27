<?php
    $status = [
        'cur_page' => 'home'
    ];
?>

<?php require_once('_global.php'); ?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once('_head.php'); ?>

  <body>

<!--gt Wrapper Start-->  
<div class="gt_wrapper">

    <!--Header Wrap Start-->
    <?php require_once('_body_header.php'); ?>
    <!--Header Wrap End-->

    <!--Banner Wrap Start-->
    <?php require_once('_banner.php'); ?>
    <!--Banner Wrap End-->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
        <!--Banner Services Wrap Start-->
        <?php include(section('services')); ?>
        <!--Banner Services Wrap End-->
                
        <!--Latest News Wrap Start-->
        <?php include(section('latest_news')); ?>
        <!--Latest News Wrap End-->

        <!--Our Gallery Wrap Start-->
        <?php include(section('gallery_summary')); ?>
        <!--Our Gallery Wrap End-->
        
        <!--Our Sponsors Wrap Start-->
        <section>
            <div class="container">
                <!--Main Heading Wrap Start-->
                <div class="gt_hdg_1">
                    <h3>I nostri sostenitori</h3>
                    <p>Aenean commodo ligula eget dolor. Aenean massa. <span>elit, eget nibh etlibura.</span>
                    </p>
                    <span><img src="images/hdg-01.png" alt=""></span>
                </div>
                <!--Main Heading Wrap End-->
                
                <!--Brand List Wrap Start-->
                <div class="gt_brand_carousel owl-carouse">
                    <div class="item">
                        <div class="gt_brand_outer_wrap">
                            <a href="#"><img src="images/brand-01.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gt_brand_outer_wrap">
                            <a href="#"><img src="images/brand-02.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gt_brand_outer_wrap">
                            <a href="#"><img src="images/brand-03.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gt_brand_outer_wrap">
                            <a href="#"><img src="images/brand-04.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gt_brand_outer_wrap">
                            <a href="#"><img src="images/brand-05.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gt_brand_outer_wrap">
                            <a href="#"><img src="images/brand-06.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gt_brand_outer_wrap">
                            <a href="#"><img src="images/brand-01.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <!--Brand List Wrap End-->
                
            </div>
        </section>
        <!--Our Client Wrap End-->
    </div>
    <!--Main Content Wrap End-->
    
    <!--Footer Wrap Start-->
    <?php require_once('_footer.php') ?>
    <!--Footer Wrap End-->
    
    <!--Back to Top Wrap Start-->
    <?php require_once('_back_to_top.php') ?>
    <!--Back to Top Wrap Start-->

</div>
<!--gt Wrapper End-->



    <!--Jquery Library-->
    <script src="js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!--Swiper JavaScript-->
    <script src="js/swiper.jquery.min.js"></script>
    <!--Accordian JavaScript-->
    <script src="js/jquery.accordion.js"></script>
    <!--Count Down JavaScript-->
    <script src="js/jquery.downCount.js"></script>
    <!--Pretty Photo JavaScript-->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!--Owl Carousel JavaScript-->
	<script src="js/owl.carousel.js"></script>
    <!--Number Count (Waypoint) JavaScript-->
	<script src="js/waypoints-min.js"></script>
    <!--Filter able JavaScript-->
	<script src="js/jquery-filterable.js"></script>
    <!--WOW JavaScript-->
    <script src="js/wow.min.js"></script>
    <!--Custom JavaScript-->
	<script src="js/custom.js"></script>

  </body>
</html>
