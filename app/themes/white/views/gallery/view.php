<?php
use yii\easyii\modules\gallery\api\Gallery;

$this->title = $album->seo('title', $album->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Gallery', 'url' => ['gallery/index']];
$this->params['breadcrumbs'][] = $album->model->title;
?>


    <section id="portfolio">

        <!-- CONTAINER -->
        <div class="container">

            <!-- ROW -->
            <div class="row">
                <!-- SIDEBAR -->
                <div class="sidebar col-lg-4 col-md-4 pull-right padbot50">
                    <!-- TEXT WIDGET -->
                    <div class="sidepanel widget_text">
                        <div class="single_portfolio_post_title"><?= $album->seo('h1', $album->title) ?></div>
                   <!--     <p>On Tuesday, the daughters of Texas state senator Wendy Davis defended their mom against charges that she’s been smudging her biography to make it look like she was a more involved mom than she actually was. Davis, who is running for governor, has been under fire since a Dallas Morning News article accused her of “blurring” facts, like exactly when she got divorced and how long her family lived in a trailer park.</p>
                   -->
                    </div><!-- //TEXT WIDGET -->

                    <hr>

                    <!-- INFO WIDGET -->
                    <div class="sidepanel widget_info">

                        <ul class="work_info">
                        <!--    <li>Location: <a href="void(0);">Photo Studio,</a> <a href="void(0);">New York</a></li>
                            <li>Model: <a href="void(0);">Anna Smith</a></li>
                            <li>Style: <a href="void(0);">Fashion Style</a></li>
                            -->
                        </ul>
                        <ul class="shared">
                            <li><a target="blank" href="http://twitter.com/home?status=<?=$album->title?> - <?=\yii\helpers\Url::current()?>" onclick="window.open('http://twitter.com/home?status=<?=$album->title?> - <?=\yii\helpers\Url::current()?>','twitter','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="blank" href="<?=\yii\helpers\Url::current()?>" onclick="window.open('http://www.facebook.com/share.php?u=<?=\yii\helpers\Url::current()?>','facebook','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="blank" onclick="window.open('https://plus.google.com/share?url=<?=\yii\helpers\Url::current()?>,'gplusshare','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;" href="https://plus.google.com/share?url=<?=\yii\helpers\Url::current()?>"><i class="fa fa-google-plus"></i></a></li>
                            <li><a alt="" href="javascript:void(0);"><i class="fa fa-pinterest-square"></i></a></li>
                        </ul>
                    </div><!-- //INFO WIDGET -->
                </div><!-- //SIDEBAR -->


                <!-- PORTFOLIO BLOCK -->
                <div class="portfolio_block col-lg-8 col-md-8 pull-left padbot50">

                    <!-- SINGLE PORTFOLIO POST -->
                    <div data-animated="fadeInUp" class="single_portfolio_post clearfix animated fadeInUp">
                        <!-- PORTFOLIO SLIDER -->
                        <div class="flexslider portfolio_single_slider">
                            <ul class="slides">
                                <?php foreach($photos as $photo) : ?>
                                    <li><img src="<?=$photo->thumb(800,600)?>" draggable="false"></li>
                                <?php  endforeach;?>
                            </ul>
                    </div><!-- //PORTFOLIO SLIDER -->
                    </div><!-- //SINGLE PORTFOLIO POST -->
                </div><!-- //PORTFOLIO BLOCK -->
            </div><!-- //ROW -->
        </div><!-- //CONTAINER -->

    </section>

    <section class="padbot20" id="projects">

    <!-- CONTAINER -->
    <div class="container">
        <h2><b>Featured</b> Works</h2>
    </div><!-- //CONTAINER -->


    <div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
        <!-- PROJECTS SLIDER -->
        <div class="owl-demo owl-carousel projects_slider">

            <?php foreach(Gallery::last(6) as $photo) : ?>
                <div class="item">
                    <div class="work_item">
                        <div class="work_img">
                            <img src="<?=$photo->image?>" alt="" />
                            <a class="zoom" href="<?=$photo->image?>" rel="prettyPhoto[portfolio1]" ></a>
                        </div>
                        <div class="work_description">
                            <div class="work_descr_cont">
                                <a href="portfolio-post.html" ></a>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    </section>

