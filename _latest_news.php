<? $news = read_news(); ?>
<section class="gt_news_bg">
    <div class="container">
        <!--Main Heading Wrap Start-->
        <div class="gt_hdg_1">
            <h3>News ed Eventi</h3>
            <p>Aenean commodo ligula eget dolor. Aenean massa. <span>elit, eget nibh etlibura.</span>
            </p>
            <span><img src="images/hdg-01.png" alt=""></span>
        </div>
        <!--Main Heading Wrap End-->

        <!--Latest News Wrap Start-->
        <div class="gt_news_slider" id="gt_news_slider">
            <? foreach($news as $n) { ?>
            <div class="item">
                <div class="gt_blog_wrap">
                    <figure>
                        <img src="<?=$n->img_summary?>" alt="">
                    </figure>
                    <div class="gt_blog_des_wrap">
                        <ul class="gt_blog_meta">
                            <li><i class="fa fa-calendar"></i><?=format_date_medium($n->from)?></li>
                        </ul>
                        <h5><a href="<?link_news($n)?>"><?=$n->title?></a></h5>
                        <p><?=$n->summary?></p>
                        <a href="<?=link_news($n)?>">Leggi <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <?}?>
        </div>
        <!--Latest News Wrap End-->

    </div>
</section>
