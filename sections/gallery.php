<?php
  $gallery = read_gallery();
?>

<section class="gt_gallery_filter_bg">
    <div class="container">
        <div class="row">
            <ul id="filterable-item-filter-1">
                <li class="active"><a data-value="all">Tutte</a></li>
                <?php foreach($gallery->categories as $key => $value) { ?>                
                  <li><a data-value="<?= $key ?>"><?= $value ?></a></li>
                <?php } ?>
            </ul>

            <div id="filterable-item-holder-1">
                <?php foreach($gallery->images as $image) { ?>
                <div class="filterable-item all col-md-4 col-sm-6 col-xs-12 <?= implode(" ", $image->categories) ?>">
                    <div class="edu_masonery_thumb">
                        <figure>
                            <img src="<?= $image->img ?>" alt=""/>
                            <a href="<?= $image->img ?>" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </figure>
                    </div>  
                </div>
                <? } ?>
            </div>
        </div>
    </div>
</section>
