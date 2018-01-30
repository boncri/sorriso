<?php
    require_once('_global.php'); 

    $menu = load_menu();
?>
<section class="gt_servicer nopadding">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="gt_main_services bg_1">
                    <i class="icon-write-board"></i>
                    <h5>La didattica</h5>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. </p>
                    <a  class="bg_1" href="<?= find_menu_item('didattica', $menu)->link ?>"> <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="gt_main_services bg_2">
                    <i class="icon-teacher-showing-on-whiteboard"></i>
                    <h5>Il metodo</h5>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. </p>
                      <a class="bg_2" href="<?= find_menu_item('metodo', $menu)->link ?>"> <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="gt_main_services bg_3">
                    <i class="flaticon-donate"></i>
                    <h5>Sostienici</h5>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. </p>
                      <a class="bg_3" href="<?= find_menu_item('sostienici', $menu)->link ?>"> <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="gt_main_services bg_4">
                    <i class="flaticon-letter"></i>
                    <h5>Come iscriversi</h5>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. </p>
                      <a class="bg_4" href="<?= find_menu_item('iscrizioni', $menu)->link ?>"> <i class="fa fa-arrow-right"></i></a>
                    
                </div>
            </div>
        </div>
    </div>
</section>
