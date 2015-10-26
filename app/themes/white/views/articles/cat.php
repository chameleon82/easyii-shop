<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\easyii\modules\article\api\Article;

$this->title = $cat->seo('title', $cat->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['articles/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
?>

    <section id="blog" style="min-height: 543px;">

        <!-- CONTAINER -->
        <div class="container">

            <!-- ROW -->
            <div class="row">
                <!-- BLOG BLOCK -->
                <div class="blog_block col-lg-9 col-md-9 padbot50">

                    <?
                    //print_r(Article::)

                    ?>

                    <!-- BLOG POST -->
                    <?php if (count($items)) :
                        foreach ($items as $article) :
                            echo $this->render('_postpreview', ['article' => $article]);
                        endforeach;
                    else : ?>
                        <p>Category is empty</p>
                    <?php endif; ?>
                    <!-- //BLOG POST -->


                    <!-- PAGINATION -->
                    <div class=" text-center">
                    </div>
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


<? // $cat->pages()
?>