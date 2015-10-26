<?php
use yii\easyii\modules\guestbook\api\Guestbook;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;
use yii\helpers\Url;

$page = Page::get('page-guestbook');

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
                        <?php foreach(Guestbook::items(['pagination' => ['pageSize' => 2]]) as $item) : ?>
                            <div class="guestbook-item">
                                <b><?= $item->name ?></b>
                                <small class="text-muted"><?= $item->date ?></small>
                                <p><?= $item->text ?></p>
                                <?php if($item->answer) : ?>
                                    <blockquote>
                                        <b>Administrator</b><br>
                                        <?= $item->answer?>
                                    </blockquote>
                                <?php endif; ?>
                            </div>
                            <br>
                        <?php endforeach; ?>

                        <?= Guestbook::pages() ?>

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
                <?php if(Yii::$app->request->get(Guestbook::SENT_VAR)) : ?>
                    <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Message successfully added</h4>
                <?php else : ?>
                    <h4>Leave message</h4>
                    <div class="well well-sm">
                        <?= Guestbook::form() ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- //SIDEBAR -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>

