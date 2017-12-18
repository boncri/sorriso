<?php require_once("_global.php") ?>
<section>
    <div class="container">
        <div class="row">
            <!--Event Detail Wrap Start-->
            <div class="col-md-12">
                <div class="gt_e_detail_wrap default_width">
                    <figure>
                        <img src="extra-images/course-detail-01.jpg" alt="">
                    </figure>
                    <div class="event_detail_wrap">
                        <h5><?=$item->title?></h5>
                        <p><?=$item->body?></p>                                        
                    </div>
                    <div class="event_list_detail">
                        <ul>
                            <li>
                                <i class="fa fa-calendar"></i>
                                <div class="cls_spec_des">
                                    <h6>Data</h6>
                                    <p><?=format_date_long($item->from)?></p>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-clock-o"></i>
                                <div class="cls_spec_des">
                                    <h6>Orario</h6>
                                    <p><?=format_time($item->from)?> - <?=format_time($item->to)?></p>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <div class="cls_spec_des">
                                    <h6>Indirizzo</h6>
                                    <p><?=$item->address?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="gt_evnt_map">
                  <iframe src="<?=$item->map?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                                    
                </div>
            </div>
            <!--Event Detail Wrap End-->
        </div>
    </div>
</section>
