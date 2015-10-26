<?php
use yii\easyii\modules\news\api\News;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = $news->seo('title', $news->model->title);
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['news/index']];
$this->params['breadcrumbs'][] = $news->model->title;
?>


<section id="blog" style="min-height: 543px;">

    <!-- CONTAINER -->
    <div class="container">


        <!-- ROW -->
        <div class="row">
            <!-- BLOG BLOCK -->
            <div class="blog_block col-lg-9 col-md-9 padbot50">


                <div data-animated="fadeInUp" class="single_blog_post clearfix animated fadeInUp">

                    <div class="single_blog_post_descr">
                        <div class="single_blog_post_date"><?= Yii::$app->formatter->asDate($news->date, 'medium') ?>
                            | <?= Yii::$app->formatter->asDate($news->date, 'H:mm') ?></div>
                        <div class="single_blog_post_title"><?= $news->seo('h1', $news->title) ?></div>
                        <ul class="single_blog_post_info">
                            <!--    <li><a rel="author" title="Posts by admin" href="http://shinetheme.com/demosd/white/author/admin/">admin</a></li> -->
                            <li>
                                Views: <?= $news->views ?>
                            </li>
                            <!-- <li><span>Comments Off</span></li> -->
                        </ul>
                    </div>
                    <div class="single_blog_post_img">
                        <?= Html::img($news->thumb(870, 500), ['class' => 'attachment-post-thumbnail wp-post-image']) ?>
                    </div>

                    <div class="single_blog_post_content">
                        <?= $news->text ?>
                        <br>
                    </div>

                </div>


                <?php if(count($news->photos)) : ?>
                    <div>
                        <h4>Photos</h4>
                        <?php foreach($news->photos as $photo) : ?>
                            <?= $photo->box(100, 100) ?>
                        <?php endforeach;?>
                        <?php News::plugin() ?>
                    </div>
                    <br/>
                <?php endif; ?>
                <div data-animated="fadeInUp" class="single_blog_post_tags margbot50 animated fadeInUp">
                    <?php foreach($news->tags as $tag) : ?>
                        <a rel="tag" href="<?= Url::to(['/news', 'tag' => $tag]) ?>"><?= $tag ?></a>
                    <?php endforeach; ?>
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




