<?php
use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\carousel\api\Carousel;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\guestbook\api\Guestbook;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\text\api\Text;
use yii\helpers\Html;

$page = Page::get('page-index');

$this->title = $page->seo('title', $page->model->title);

?>
<section>
    <?
    $carousel_items = yii\easyii\modules\carousel\api\Carousel::items();
    ?>
</section>

    <!-- HOME -->
    <section id="home" class="padbot0">

        <!-- TOP SLIDER -->
        <div class="flexslider top_slider">
            <ul class="slides">
                <?
                foreach($carousel_items as $item) {
                    $title = explode(' ',$item->title);
                    echo '
                    <li class="slide2" style="background-image: url('.$item->image.')">
                    <div class="flex_caption1">
                        <p class="title1 captionDelay2 FromTop">'.array_shift($title) .'</p>
                        <p class="title2 captionDelay4 FromTop">'.array_shift($title).'</p>
                        <p class="title3 captionDelay6 FromTop">'.implode(' ',$title).'</p>
                        <p class="title4 captionDelay7 FromBottom">'.$item->text.'</p>
                    </div>
                    <a class="slide_btn FromRight" href="javascript:void(0);" >'.\Yii::t('app','Read more').'</a>
                    </li>
';
                };


                ?>
              </ul>
        </div>
        <div id="carousel">
            <ul class="slides">
                <?
                foreach($carousel_items as $item) {
                    echo '<li><img src="'.$item->image.'" alt="" /></li>';
                };
                ?>
            </ul>
        </div><!-- //TOP SLIDER -->
    </section><!-- //HOME -->


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

<!--
        <div class="our_clients">
            <div data-animated="fadeInUp" data-appear-top-offset="-200" class="container animated fadeInUp">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 client_img"><img width="170" height="100" class="BWFilter BWfade" src="http://evick.ru/market/white/image_slider/images/clients/1.jpg" style="position: absolute; top: 0px; left: 15px; display: block;">
                        <img alt="" src="images/clients/1.jpg">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 client_img"><img width="170" height="100" class="BWFilter BWfade" src="http://evick.ru/market/white/image_slider/images/clients/2.jpg" style="position: absolute; top: 0px; left: 15px; display: block;">
                        <img alt="" src="images/clients/2.jpg">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 client_img"><img width="170" height="100" class="BWFilter BWfade" src="http://evick.ru/market/white/image_slider/images/clients/3.jpg" style="position: absolute; top: 0px; left: 15px; display: block;">
                        <img alt="" src="images/clients/3.jpg">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 client_img"><img width="170" height="100" class="BWFilter BWfade" src="http://evick.ru/market/white/image_slider/images/clients/4.jpg" style="position: absolute; top: 0px; left: 15px; display: block;">
                        <img alt="" src="images/clients/4.jpg">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 client_img"><img width="170" height="100" class="BWFilter BWfade" src="http://evick.ru/market/white/image_slider/images/clients/5.jpg" style="position: absolute; top: 0px; left: 15px; display: block;">
                        <img alt="" src="images/clients/5.jpg">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 client_img"><img width="170" height="100" class="BWFilter BWfade" src="http://evick.ru/market/white/image_slider/images/clients/6.jpg" style="position: absolute; top: 0px; left: 15px; display: block;">
                        <img alt="" src="images/clients/6.jpg">
                    </div>
                </div>
            </div>
        </div>
-->
    </section>
    <section id="news">
        <h2>Last news</h2>
        <blockquote class="text-left">
            <?= Html::a(News::last()->title, ['news/view', 'slug' => News::last()->slug]) ?>
            <br/>
            <?= News::last()->short ?>
        </blockquote>

    </section>

<?/* Carousel::widget(1140, 520) */ ?>
<?


?>
<? /*


<div class="text-center">
    <h1><?= Text::get('index-welcome-title') ?></h1>
    <p><?= $page->text ?></p>
</div>

<br/>
<hr/>

<div class="text-center">
    <h2>Last photos</h2>
    <br/>
    <?php foreach(Gallery::last(6) as $photo) : ?>
        <?= $photo->box(180, 135) ?>
    <?php endforeach;?>
    <?php Gallery::plugin() ?>
</div>

<br/>
<hr/>

<div class="text-center">
    <h2>Last news</h2>
    <blockquote class="text-left">
        <?= Html::a(News::last()->title, ['news/view', 'slug' => News::last()->slug]) ?>
        <br/>
        <?= News::last()->short ?>
    </blockquote>
</div>

<br/>
<hr/>


<div class="text-center">
    <h2>Last article from category #1</h2>
    <br/>
    <div class="row text-left">
        <?php $article = Article::last(1, ['category_id' => 1]); ?>
        <div class="col-md-2">
            <?= Html::img($article->thumb(160, 120)) ?>
        </div>
        <div class="col-md-10 text-left">
            <?= Html::a($article->title, ['articles/view', 'slug' => $article->slug]) ?>
            <br/>
            <?= $article->short ?>
        </div>
    </div>
</div>

<br/>
<hr/>

<div class="text-center">
    <h2>Last reviews</h2>
    <br/>
    <div class="row text-left">
        <?php foreach(Guestbook::last(2) as $post) : ?>
            <div class="col-md-6">
                <b><?= $post->name ?></b>
                <p class="text-muted"><?= $post->text ?></p>
            </div>
        <?php endforeach;?>
    </div>
</div>

<br/>


 */ ?>