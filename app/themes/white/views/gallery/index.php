<?php
use yii\easyii\helpers\Image;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;
use yii\helpers\Url;

$page = Page::get('page-gallery');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;
?>


<section class="padbot20" id="projects">

    <!-- CONTAINER -->
    <div class="container">


        <h2><b><?= $page->seo('h1', $page->title) ?></b></h2>
        <!--<nav class="portfolio-filter clearfix">
            <ul class="widget_tags">
                <li class="active"><a data-filter="*" href="#">All</a></li>
                <li><a data-filter=".fashion-2" href="#">Fashion</a></li>
                <li><a data-filter=".glamour" href="#">Glamour</a></li>
                <li><a data-filter=".other" href="#">Other</a></li>
                <li><a data-filter=".portrait" href="#">Portrait</a></li>
            </ul>
        </nav>-->
    </div>
    <!-- //CONTAINER -->
    <div data-animated="fadeInUp" data-appear-top-offset="-200"
         class="projects-wrapper projects-isotope isotope animated fadeInUp"
         style="position: relative; overflow: hidden; height: 360px;">

        <?php
        $x = 0;
        $y = 0;
        foreach ($albums as $album)  :
            ?>
            <div class="item col-md-3 isotope-item"
                 style="position: absolute; left: 0px; top: 0px; transform: translate(<?= $x ?>px, <?= $y ?>px);">
                <div class="work_item">
                    <div class="work_img">
                        <?= Html::img($album->thumb(800, 600), ['alt' => $album->title]) ?>
                        <?= Html::a('', Url::to(['gallery/view', 'slug' => $album->slug]), ['title' => $album->title, 'class' => 'zoom']) ?>
                    </div>
                    <div class="work_description">
                        <div class="work_descr_cont">
                            <?= Html::a($album->title, Url::to(['gallery/view', 'slug' => $album->slug]), []) ?>
                            <!--                            <span>03 April 2014</span>-->
                        </div>
                    </div>
                </div>
            </div>
            <?
            if ($x != 1440) {
                $x += 480;
            } else {
                $x = 0;
                $y += 360;
            } ?>
        <?php endforeach; ?>

    </div>
    <div class="clear"></div>
    <div class="container">
        <!-- PAGINATION -->
        <!--
        <div class=" text-center">
            <ul class="pagination">
                <li><a href="#"                       class="prev page-numbers"></a></li>
                <li><a href="#" class="page-numbers">1</a>
                </li>
                <li><span class="page-numbers current">2</span></li>
            </ul>
        </div>-->
    </div>
    <div class="clear"></div>

</section>



