<?php
use yii\helpers\Html;
?>
<!-- BLOG POST -->
<div data-animated="fadeInUp"
     class="post type-post status-publish format-standard has-post-thumbnail hentry category-summer tag-color tag-show blog_post margbot50 clearfix animated fadeInUp">
    <div class="blog_post_img">
        <?= Html::img($article->thumb(870, 500), ['class' => 'attachment-post-thumbnail wp-post-image']) ?>
    </div>
    <div class="blog_post_descr">
        <div class="blog_post_date"><?= Yii::$app->formatter->asDate($article->date, 'medium') ?>
            | <?= Yii::$app->formatter->asDate($article->date, 'H:mm') ?></div>
        <?= Html::a($article->title, ['articles/view', 'slug' => $article->slug], ['class' => 'blog_post_title', 'title' => $article->title]) ?>
        <ul class="blog_post_info">
            <li><a rel="author" title="Posts by admin" href="#">admin</a></li>
            <li>
                <?= Html::a($article->cat->title, ['articles/cat', 'slug' => $article->cat->slug], ['title' => $article->title]) ?>
            </li>
            <li><span>Comments Off</span></li>
        </ul>
        <hr>
        <div class="blog_post_content"><?= $article->short ?></div>
        <?= Html::a('Read More', ['articles/view', 'slug' => $article->slug], ['class' => 'read_more_btn', 'title' => $article->title]) ?>
    </div>
</div>
<!-- //BLOG POST -->