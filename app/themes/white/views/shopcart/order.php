<?php
use yii\helpers\Html;

$this->title = 'Order details';
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
                        <div class="single_blog_post_title">Order #<?= $order->id ?></div>
                    </div>


                    <div class="single_blog_post_content">


                        <div class="well well-sm">Status: <b><?= $order->status ?></b></div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Item</th>
                                <th width="100">Quantity</th>
                                <th width="120">Unit Price</th>
                                <th width="100">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($order->goods as $good) : ?>
                                <tr>
                                    <td>
                                        <?= Html::a($good->item->title, ['/shop/view', 'slug' => $good->item->slug]) ?>
                                        <?= $good->options ? "($good->options)" : '' ?>
                                    </td>
                                    <td><?= $good->count ?></td>
                                    <td>
                                        <?php if($good->discount) : ?>
                                            <del class="text-muted "><small><?= $good->item->oldPrice ?></small></del>
                                        <?php endif; ?>
                                        <?= $good->price ?>
                                    </td>
                                    <td><?= $good->price * $good->count ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="5" class="text-right">
                                    <h3>Total: <?= $order->cost ?>$</h3>
                                </td>
                            </tr>
                            </tbody>
                        </table>

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


            </div>
            <!-- //SIDEBAR -->
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</section>

