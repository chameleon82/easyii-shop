<?php
use yii\helpers\Html;

?>
<div class="recent_posts_widget clearfix">
    <div class="post_item_img_widget">
        <?= Html::img($article->thumb(870, 500), ['class' => 'attachment-post-thumbnail wp-post-image']) ?>
    </div>
    <div class="post_item_content_widget">
        <?= Html::a($article->title, ['articles/view', 'slug' => $article->slug], ['class' => 'title', 'title' => $article->title]) ?>
        <ul class="post_item_inf_widget">
            <li><?= Yii::$app->formatter->asDate($article->date, 'medium') ?>
                | <?= Yii::$app->formatter->asDate($article->date, 'H:mm') ?></li>
        </ul>
    </div>
</div>
