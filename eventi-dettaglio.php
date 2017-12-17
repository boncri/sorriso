<?php
    $status = [
        'cur_page' => 'Eventi'        
    ];

    $item_id = $_GET['id'] ?? 0;
?>

<? require('_global.php'); ?>
  
<?php
    $item = read_news_item($item_id);

    if(!isset($item)) {
      header('Location: eventi.php'); die();
    }

    $status['cur_page_title'] = $item->title;
?>

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
    </div>
    <!--Main Content Wrap End-->
            
    <!--Footer Wrap Start-->
    <? require('_footer.php'); ?>
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
    <!--Map JavaScript-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk" type="text/javascript"></script>
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
