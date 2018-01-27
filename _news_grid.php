<?php require_once("_global.php") ?>
<?php 
    $news = read_news();

    if(isset($pagination)) {
      $first_item = $pagination['size'] * ($pagination['current'] - 1);
      if($first_item >= count($news) || $first_item < 0) {
          $pagination['current'] = 1;
          $first_item = 0;
      }

      $pagination['pages'] = ceil(count($news) / $pagination['size']);

      $news = array_slice(read_news(), $first_item, $pagination['size']);
    }    
?>

<section>
    <div class="container">
        <div class="row">
            <?php foreach($news as $item) { ?>
            <div class="col-md-4 col-md-6">
                <div class="gt_blog_wrap mb">
                    <figure>
                        <img src="<?=$item->img_summary?>" alt="">
                    </figure>
                    <div class="gt_blog_des_wrap">
                        <ul class="gt_blog_meta">
                            <li><i class="fa fa-calendar"></i><?=format_date_medium($item->dt_from)?></li>
                        </ul>
                        <h5><a href="<?=link_news($item)?>"><?=$item->title?></a></h5>
                        <p><?=$item->summary?></p>
                        <a href="<?=link_news($item)?>">Leggi <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!--Pagination Wrap Start-->
            <?php if (isset($pagination)) { ?>
            <div class="gt_pagination_outer_wrap">
                <ul>
                    <?php if($pagination['current'] > 1) { ?>
                    <li><a href="eventi.php?page=<?=$pagination['current']-1?>"><i class="fa fa-angle-double-left"></i></a></li>
                    <?php } ?>
                    <li class="active"><a href="eventi.php"><?=$pagination['current']?></a></li>
                    <?php if($pagination['current'] < $pagination['pages']) { ?>
                    <li><a href="eventi.php?page=<?=$pagination['current']+1?>"><i class="fa fa-angle-double-right"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
            <!--Pagination Wrap End-->
        </div>
    </div>
</section>
