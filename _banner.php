<?php
  $num_banners = 3;
?>

<div class="gt_banner default_width">
    <div class="swiper-container" id="swiper-container">
          <ul class="swiper-wrapper">
            <?php for($i=1; $i<=$num_banners; $i++) { ?>
            <li class="swiper-slide">
                <img src="extra-images/banner-<?= sprintf('%02d',$i) ?>.jpg" alt="">
                <div class="gt_banner_text gt_slide_<?=$i?>">
                    <?php include(sprintf('_banner-%02d.html', $i)) ?>
                </div>
            </li>                
            <?php } ?>            
          </ul>
      </div>
    <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
    <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
</div>
