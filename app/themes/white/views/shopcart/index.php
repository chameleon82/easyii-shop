<?php
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\shopcart\api\Shopcart;
use yii\helpers\Html;
use yii\helpers\Url;

$page = Page::get('page-shopcart');

$this->title = $page->seo('title', $page->model->title);
$this->params['breadcrumbs'][] = $page->model->title;
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
                        <div class="single_blog_post_title"><?= $page->seo('h1', $page->title) ?></div>
                    </div>


                    <div class="single_blog_post_content">
                        <?php if (count($goods)) : ?>
                            <?= Html::beginForm(['/shopcart/update']) ?>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Item</th>
                                    <th width="100">Quantity</th>
                                    <th width="120">Unit Price</th>
                                    <th width="100">Total</th>
                                    <th width="30"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($goods as $good) : ?>
                                    <tr>
                                        <td>
                                            <?= Html::a($good->item->title, ['/shop/view', 'slug' => $good->item->slug]) ?>
                                            <?= $good->options ? "($good->options)" : '' ?>
                                        </td>
                                        <td><?= Html::textInput("Good[$good->id]", $good->count, ['class' => 'form-control input-sm']) ?></td>
                                        <td>
                                            <?php if ($good->discount) : ?>
                                                <del class="text-muted ">
                                                    <small><?= $good->item->oldPrice ?></small>
                                                </del>
                                            <?php endif; ?>
                                            <?= $good->price ?>
                                        </td>
                                        <td><?= $good->price * $good->count ?></td>
                                        <th><?= Html::a('<i class="glyphicon glyphicon-trash text-danger"></i>', ['/shopcart/remove', 'id' => $good->id], ['title' => 'Remove item']) ?></th>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="5" class="text-right">
                                        <h3>Total: <?= Shopcart::cost() ?>$</h3>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <?= Html::submitButton('<i class="glyphicon glyphicon-refresh"></i> Update', ['class' => 'btn btn-default pull-right']) ?>
                            <?= Html::endForm() ?>
                        <?php else : ?>
                            <p>Shopping cart is empty</p>
                        <?php endif; ?>

                        <br>
                    </div>

                </div>
                <!-- //SINGLE BLOG POST -->


                <hr class="margbot80">

                <!-- LEAVE A COMMENT -->
            </div>
            <!-- //BLOG BLOCK -->


            <!-- SIDEBAR -->
            <div class="sidebar col-lg-3 col-md-3 padbot50">
                <?php if (count($goods)) : ?>
                    <h4>Checkout</h4>
                    <div class="well well">
                        <?= Shopcart::form(['successUrl' => Url::to('/shopcart/success')]) ?>
                    </div>
                <?php endif; ?>
            </div>
            <!-- //SIDEBAR -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>

