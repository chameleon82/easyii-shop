<?php
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\page\api\Page;

$page = Page::get('page-shop-search');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['shop/index']];
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
                        <?php if(count($items)) : ?>
                            <?php foreach($items as $item) : ?>
                                <?= $this->render('_item', ['item' => $item]) ?>
                            <?php endforeach; ?>
                            <?= Catalog::pages() ?>
                        <?php else : ?>
                            <p>No items found</p>
                        <?php endif; ?>
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
                <?= $this->render('_search_form', ['text' => $text]) ?>


            </div>
            <!-- //SIDEBAR -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>

