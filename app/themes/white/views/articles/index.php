<?php
use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;

$page = Page::get('page-articles');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;

function renderNode($node)
{
    if (!count($node->children)) {
        $html = '<li>' . Html::a($node->title, ['/articles/cat', 'slug' => $node->slug]) . '</li>';
    } else {
        $html = '<li>' . $node->title . '</li>';
        $html .= '<ul>';
        foreach ($node->children as $child) $html .= renderNode($child);
        $html .= '</ul>';
    }
    return $html;
}

?>

<? echo $this->render('_parallax',['article' => $article]); ?>

<section id="blog" style="min-height: 543px;">

    <!-- CONTAINER -->
    <div class="container">


        <!-- ROW -->
        <div class="row">
            <!-- BLOG BLOCK -->
            <div class="blog_block col-lg-9 col-md-9 padbot50">
                <?
                foreach (Article::last(10) as $article) {
                    echo $this->render('_postpreview',['article' => $article]);
                 } ?>


                <!-- PAGINATION -->
                <div class=" text-center">
                </div>
            </div>
            <!-- //BLOG BLOCK -->

            <!-- SIDEBAR -->
            <div class="sidebar col-lg-3 col-md-3 padbot50">
                <?= $this->render('_sidebar');?>
            </div>
        <!-- //SIDEBAR -->

    </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>

