<?php
use app\models\AddToCartForm;
use yii\easyii\modules\catalog\api\Catalog;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = $item->seo('title', $item->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['shop/index']];
$this->params['breadcrumbs'][] = ['label' => $item->cat->title, 'url' => ['shop/cat', 'slug' => $item->cat->slug]];
$this->params['breadcrumbs'][] = $item->model->title;

$colors = [];
if(!empty($item->data->color) && is_array($item->data->color)) {
    foreach ($item->data->color as $color) {
        $colors[$color] = $color;
    }
}
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
                        <div class="single_blog_post_title"><?= $item->seo('h1', $item->title) ?></div>
                    </div>


                    <div class="single_blog_post_content">
                        <br/>
                        <?= Html::img($item->thumb(120, 240)) ?>
                        <?php if(count($item->photos)) : ?>
                            <br/><br/>
                            <div>
                                <?php foreach($item->photos as $photo) : ?>
                                    <?= $photo->box(null, 100) ?>
                                <?php endforeach;?>
                                <?php Catalog::plugin() ?>
                            </div>
                        <?php endif; ?>
                        <br>
                    </div>

                    <h2>
                        <span class="label label-warning"><?= $item->price ?>$</span>
                        <?php if($item->discount) : ?>
                            <del class="small"><?= $item->oldPrice ?></del>
                        <?php endif; ?>
                    </h2>
                    <h3>Characteristics</h3>
                    <?
                    foreach($item->model->category->fields as $field) {
                        $value = !empty($item->data->{$field->name}) ? $item->data->{$field->name} : null;
                        echo '<span class="text-muted">'.$field->title.'</span> ';
                        if ($field->type === 'string') {
                            echo $value;
                        }
                        elseif ($field->type === 'text') {
                            echo $value;
                        }
                        elseif ($field->type === 'boolean') {
                            echo $value ? 'Да' : 'Нет';
                        }
                        elseif ($field->type === 'select') {
                            echo $value;
                        }
                        elseif ($field->type === 'checkbox') {
                            echo implode(', ', (array)$value);
                        }
                        echo '<br/>';
                    };
                    ?>
                    <span class="text-muted">Availability:</span> <?= $item->available ? $item->available : 'Out of stock' ?>
                    <?php if(!empty($item->data->features)) : ?>
                        <br/>
                        <span class="text-muted">Features:</span> <?= implode(', ', $item->data->features) ?>
                    <?php endif; ?>

                </div>
                <!-- //SINGLE BLOG POST -->

                <?= $item->description ?>


                <hr class="margbot80">

                <!-- LEAVE A COMMENT -->
            </div>
            <!-- //BLOG BLOCK -->


            <!-- SIDEBAR -->
            <div class="sidebar col-lg-3 col-md-3 padbot50">
                <?php if(Yii::$app->request->get(AddToCartForm::SUCCESS_VAR)) : ?>
                    <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Added to cart</h4>
                <?php elseif($item->available) : ?>
                    <br/>
                    <div class="well well-sm">
                        <?php $form = ActiveForm::begin(['action' => Url::to(['/shopcart/add', 'id' => $item->id])]); ?>
                        <?php if(count($colors)) : ?>
                            <?= $form->field($addToCartForm, 'color')->dropDownList($colors) ?>
                        <?php endif; ?>
                        <?= $form->field($addToCartForm, 'count') ?>
                        <?= Html::submitButton('Add to cart', ['class' => 'btn btn-warning']) ?>
                        <?php ActiveForm::end(); ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- //SIDEBAR -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>

