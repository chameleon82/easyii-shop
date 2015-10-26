<?php
use yii\easyii\modules\feedback\api\Feedback;
use yii\easyii\modules\page\api\Page;

$page = Page::get('page-contact');

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
                <?php if(Yii::$app->request->get(Feedback::SENT_VAR)) : ?>
                    <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Message successfully sent</h4>
                <?php else : ?>
                    <div class="well well-sm">
                        <?= Feedback::form(['enableCaptcha'=>0]) ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- //SIDEBAR -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>


