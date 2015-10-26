<?php
use yii\easyii\modules\article\api\Article;
use yii\easyii\models\Tag;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;


?>
<!--
    <aside class="sidepanel widget widget_search" id="search-2">

        <form action="http://shinetheme.com/demosd/white/" id="searchform" method="get" role="search">

            <div class="search">

                <input type="text" id="s" name="s" value="" placeholder="Search ..."
                       class="search-field form-control" size="16">

                <input type="hidden" value="post" name="post_type">

            </div>

        </form>

        <hr>
    </aside>
    <div class="clearfix"></div>
-->

<!--
<aside class="sidepanel widget widget_archive" id="archives-2"><h3><b>Archives</b></h3>
    <ul>
        <li><a href="http://shinetheme.com/demosd/white/2014/04/">April 2014</a></li>
    </ul>
    <hr>
</aside>
<div class="clearfix"></div>

-->

<aside class="sidepanel widget widget_categories" id="categories-2"><h3><b>Categories</b></h3>
    <ul> <?
        foreach (Article::tree() as $cat) {
            echo Html::tag('li',
                Html::a($cat->title, ['articles/cat', 'slug' => $cat->slug], ['title' => 'View all posts filed under ' . $cat->title])
                , ['class' => 'cat-item']);
        }

        ?></ul>
    <hr>
</aside>
<div class="clearfix"></div>
<aside class="sidepanel widget widget_post_tab_widget" id="post_tab_widget-2"><h3><b>Popular</b> Posts
    </h3>
    <!-- POPULAR POSTS WIDGET -->
    <div class=" widget_popular_posts">
        <?
        foreach (Article::last(4) as $article) {
            echo $this->render('_recentPostWidget', ['article' => $article]);
        }
        ?>
    </div>
    <!-- //POPULAR POSTS WIDGET -->

    <hr>
</aside>
<div class="clearfix"></div>

<aside class="sidepanel widget widget_tag_cloud" id="tag_cloud-2"><h3><b>Popular</b> Tags</h3>

    <div class="tagcloud">
        <?
        foreach (Tag::find()->limit(10)->all() as $tag) {
            echo Html::a($tag->name, ['/articles/tag',  'tag' => $tag->name], ['style' => 'font-size: 8pt;', 'title' => $tag->name]);
        };
        ?>
    </div>
    <hr>
</aside>
<div class="clearfix"></div>

<?
$page = Page::get('page-articles');
$title = explode(' ', $page->title) ?>

<aside class="sidepanel widget widget_text" id="text-2"><h3>
        <b><?= array_shift($title) ?></b> <?= implode(' ', $title) ?></h3>

    <div class="textwidget"><?= $page->text ?></div>
    <hr>
</aside>
<div class="clearfix"></div>

