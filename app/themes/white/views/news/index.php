<?php
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;
use yii\helpers\Url;

$page = Page::get('page-news');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;
?>



<section id="blog" style="min-height: 543px;">

    <!-- CONTAINER -->
    <div class="container">


        <!-- ROW -->
        <div class="row">
            <!-- BLOG BLOCK -->
            <div class="blog_block col-lg-9 col-md-9 padbot50">
                <?
                foreach($news as $item)  {
                   ?>

                    <!-- NEWS POST -->
                    <div data-animated="fadeInUp"
                         class="post type-post status-publish format-standard has-post-thumbnail hentry category-summer tag-color tag-show blog_post margbot50 clearfix animated fadeInUp">
                        <div class="blog_post_img">
                            <?= Html::img($item->thumb(870, 500), ['class' => 'attachment-post-thumbnail wp-post-image']) ?>
                        </div>
                        <div class="blog_post_descr">
                            <div class="blog_post_date"><?= Yii::$app->formatter->asDate($item->time, 'medium') ?>
                                | <?= Yii::$app->formatter->asDate($item->time, 'H:mm') ?></div>
                            <?= Html::a($item->title, ['articles/view', 'slug' => $item->slug], ['class' => 'blog_post_title', 'title' => $item->title]) ?>

                            <ul class="blog_post_info">
                                <!--<li><a rel="author" title="Posts by admin" href="#">admin</a></li>
                                <li><span>Comments Off</span></li>-->
                                <?php foreach($item->tags as $tag) : ?>
                                    <li><a rel="tag" href="<?= Url::to(['/news', 'tag' => $tag]) ?>"><?= $tag ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <hr>
                            <div class="blog_post_content"><?= $item->short ?></div>
                            <?= Html::a('Read More', ['news/view', 'slug' => $item->slug], ['class' => 'read_more_btn', 'title' => $item->title]) ?>
                        </div>
                    </div>
                    <!-- //NEWS POST -->
                <?
                } ?>


                <!-- PAGINATION -->
                <div class=" text-center">
                    <?= News::pages() ?>
                </div>
            </div>
            <!-- //BLOG BLOCK -->

            <!-- SIDEBAR -->
            <div class="sidebar col-lg-3 col-md-3 padbot50">
                <?// $this->render('_sidebar');?>
            </div>
            <!-- //SIDEBAR -->

        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>





