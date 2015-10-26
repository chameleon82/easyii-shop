<?php
use yii\easyii\modules\article\api\Article;
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = $article->seo('title', $article->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['articles/index']];
$this->params['breadcrumbs'][] = ['label' => $article->cat->title, 'url' => ['articles/cat', 'slug' => $article->cat->slug]];
$this->params['breadcrumbs'][] = $article->model->title;
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
                        <div class="single_blog_post_date"><?= Yii::$app->formatter->asDate($article->date, 'medium') ?>
                            | <?= Yii::$app->formatter->asDate($article->date, 'H:mm') ?></div>
                        <div class="single_blog_post_title"><?= $article->seo('h1', $article->title) ?></div>
                        <ul class="single_blog_post_info">
                            <!--    <li><a rel="author" title="Posts by admin" href="http://shinetheme.com/demosd/white/author/admin/">admin</a></li> -->
                            <li>
                                <?= Html::a($article->cat->title, ['articles/cat', 'slug' => $article->cat->slug], ['title' => 'View all posts filed under ' . $article->cat->title, 'rel' => 'category tag']) ?>
                            </li>
                            <li>
                                Views: <?= $article->views ?>
                            </li>
                            <!-- <li><span>Comments Off</span></li> -->
                        </ul>
                    </div>
                    <div class="single_blog_post_img">
                        <?= Html::img($article->thumb(870, 500), ['class' => 'attachment-post-thumbnail wp-post-image']) ?>
                    </div>

                    <div class="single_blog_post_content">
                        <?= $article->text ?>
                        <br>
                    </div>

                </div>
                <!-- //SINGLE BLOG POST -->


                <!-- SINGLE BLOG POST TAG -->

                <?php if (count($article->photos)) : ?>
                    <div>
                        <h4>Photos</h4>
                        <?php foreach ($article->photos as $photo) : ?>
                            <?= $photo->box(100, 100) ?>
                        <?php endforeach; ?>
                        <?php Article::plugin() ?>
                    </div>
                    <br/>
                <?php endif; ?>

                <div data-animated="fadeInUp" class="single_blog_post_tags margbot50 animated fadeInUp">
                    <?php foreach ($article->tags as $tag) : ?>
                        <a rel="tag"
                           href="<?= Url::to(['/articles/tag', 'slug' => $article->cat->slug, 'tag' => $tag]) ?>"><?= $tag ?></a>
                    <?php endforeach; ?>


                </div>


                <!-- //SINGLE BLOG POST TAG -->
                <hr>

                <!-- COMMENTS -->
                <div data-animated="fadeInUp" class="margbot30 animated fadeInUp" id="comments">
                    <h3><b>Comments </b><span class="comments_count">(0)</span></h3>

                </div>
                <!-- //COMMENTS -->

                <hr class="margbot80">

                <!-- LEAVE A COMMENT -->
            </div>
            <!-- //BLOG BLOCK -->


            <!-- SIDEBAR -->
            <div class="sidebar col-lg-3 col-md-3 padbot50">
                <?= $this->render('_sidebar'); ?>
            </div>
            <!-- //SIDEBAR -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>



