<?php
    $status = [
        'cur_page' => 'Eventi'
    ];

    $pagination = [
        'size' => 6,
        'current' => $_GET['page'] ?? 1
    ];    
?>

<? require('_global.php'); ?>

<!DOCTYPE html>
<html lang="it">
  <? require('_head.php'); ?>            

  <body>

<!--gt Wrapper Start-->  
<div class="gt_wrapper">

    <!--Header Wrap Start-->
    <? require('_body_header.php'); ?>
    <!--Header Wrap End-->
    
    <!--Sub Banner Wrap Start -->    
    <? require('_sub_banner.php'); ?>
    <!--Sub Banner Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_main_content_wrap">
        <!--News Grid Wrap Start-->
        <? require('_news_grid.php') ?>
        <!--News Grid Wrap End-->
    </div>
    <!--Main Content Wrap End-->
    
    <!--Footer Wrap Start-->
    <? require('_footer.php') ?>
    <!--Footer Wrap End-->

    <!--Back to Top Wrap Start-->
    <? require('_back_to_top.php') ?>
    <!--Back to Top Wrap Start-->

</div>
<!--gt Wrapper End-->



    <!--Jquery Library-->
    <script src="js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
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
