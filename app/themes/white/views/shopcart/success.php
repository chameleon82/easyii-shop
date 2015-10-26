<?php
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\shopcart\api\Shopcart;
use yii\helpers\Html;

$page = Page::get('page-shopcart-success');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;
?>


    <section id="blog" style="min-height: 493px;">

        <!-- CONTAINER -->
        <div class="container">

            <!-- ROW -->
            <div class="row">

                <!-- BLOG BLOCK -->
                <div class="blog_block col-lg-9 col-md-9 padbot50">

                    <!-- SINGLE BLOG POST -->

                    <div data-animated="fadeInUp" class="single_blog_post clearfix animated fadeInUp">

                        <div class="single_blog_post_descr">
                            <div class="single_blog_post_title"><?= $page->seo('h1', $page->title) ?></div>
                        </div>


                        <div class="single_blog_post_content">
                            <?= $page->text ?>
                            <br>
                        </div>

                    </div>
                    <!-- //SINGLE BLOG POST -->




                    <hr class="margbot80">

                    <!-- LEAVE A COMMENT -->
                </div>
                <!-- //BLOG BLOCK -->


                <!-- SIDEBAR -->
                <div class="sidebar col-lg-3 col-md-3 padbot50">

                </div>
                <!-- //SIDEBAR -->
            </div>
            <!-- //ROW -->
        </div>
        <!-- //CONTAINER -->
    </section>



<br/>

