<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = $cat->seo('title', $cat->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['shop/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
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
                            <div class="single_blog_post_title"><?= $cat->seo('h1', $cat->title) ?></div>
                        </div>


                        <div class="single_blog_post_content">
                            <?php if(count($items)) : ?>
                                <br/>
                                <?php foreach($items as $item) : ?>
                                    <?= $this->render('_item', ['item' => $item]) ?>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <p>Category is empty</p>
                            <?php endif; ?>
                            <br>
                        </div>

                    </div>
                    <!-- //SINGLE BLOG POST -->

                    <div class=" text-center">
                        <?= $cat->pages() ?>
                    </div>


                    <hr class="margbot80">

                    <!-- LEAVE A COMMENT -->
                </div>
                <!-- //BLOG BLOCK -->


                <!-- SIDEBAR -->
                <div class="sidebar col-lg-3 col-md-3 padbot50">
                    <h4>Filters</h4>
        <div class="well well-sm">
            <?php $form = ActiveForm::begin(['method' => 'get', 'action' => Url::to(['/shop/cat', 'slug' => $cat->slug])]); ?>
                <?= $form->field($filterForm, 'brand')->dropDownList($cat->fieldOptions('brand', 'Select brand')) ?>
                <div class="row">
                     <div class="col-md-6"><?= $form->field($filterForm, 'priceFrom') ?></div>
                     <div class="col-md-6"><?= $form->field($filterForm, 'priceTo') ?></div>
                </div>
                <?= $form->field($filterForm, 'touchscreen')->checkbox() ?>
                <?= $form->field($filterForm, 'storageFrom') ?>
                <?= $form->field($filterForm, 'storageTo') ?>
                <?= Html::submitButton('Submit', ['class' => 'btn']) ?>
            <?php ActiveForm::end(); ?>
                </div>
                <!-- //SIDEBAR -->
            </div>
            <!-- //ROW -->
        </div>
        <!-- //CONTAINER -->
    </section>





