<? $gallery = read_gallery_summary() ?>
<section class="gt_gallery_bg">
    <!--Main Heading Wrap Start-->
    <div class="gt_hdg_1">
        <h3>Galleria</h3>
        <p>Aenean commodo ligula eget dolor. Aenean massa. <span>elit, eget nibh etlibura.</span>
            </p>
        <span><img src="images/hdg-01.png" alt=""></span>
    </div>
    <!--Main Heading Wrap End-->

    <!--Gallery List Wrap Start-->
    <div class="gt_gallery_slider" id="gt_gallery_slider">
        <? foreach($gallery as $image) { ?>
            <? if($image->summary) { ?>
            <div class="item">
                <div class="gt_gallery_wrap">
                    <img src="<?=$image->img?>" alt="">
                </div>
            </div>
            <? } ?>
        <? } ?>
    </div>
    <!--Gallery List Wrap End-->
</section>
