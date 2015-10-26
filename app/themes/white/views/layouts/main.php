<?php
use yii\easyii\modules\shopcart\api\Shopcart;
use yii\easyii\modules\subscribe\api\Subscribe;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use yii\helpers\Html;

use yii\easyii\helpers\Image;
use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\feedback\api\Feedback;

$goodsCount = count(Shopcart::goods());
?>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>
<div id="page" class="single_page">
    <? /*   <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= Url::home() ?>">Vlad Nekrasov</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <?= Menu::widget([
                        'options' => ['class' => 'nav navbar-nav'],
                        'items' => [
                            ['label' => \Yii::t('easyii','Home'), 'url' => ['site/index']],
//                            ['label' => 'Shop', 'url' => ['shop/index']],
//                            ['label' => 'News', 'url' => ['news/index']],
                            ['label' => \Yii::t('easyii','Articles'), 'url' => ['articles/index']],
                            ['label' => 'Gallery', 'url' => ['gallery/index']],
//                            ['label' => 'Guestbook', 'url' => ['guestbook/index']],
//                            ['label' => 'FAQ', 'url' => ['faq/index']],
                            ['label' => 'Contact', 'url' => ['/contact/index']],
                        ],
                    ]); ?>
                    <a href="<?= Url::to(['/shopcart']) ?>" class="btn btn-default navbar-btn navbar-right" title="Complete order">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        <?php if($goodsCount > 0) : ?>
                            <?= $goodsCount ?> <?= $goodsCount > 1 ? 'items' : 'item' ?> - <?= Shopcart::cost() ?>$
                        <?php else : ?>
                            <span class="text-muted">empty</span>
                        <?php endif; ?>
                    </a>

                </div>
            </div>
        </nav>
    </header>
 */
    ?>
    <!-- HEADER -->
    <header>
        <!-- MENU BLOCK -->
        <div class="menu_block">
            <!-- CONTAINER -->
            <div class="container clearfix">
                <!-- LOGO -->
                <div class="logo pull-left">
                    <a href="index.html"><span class="b1">E</span><span class="b2">A</span><span
                            class="b3">S</span><span class="b4">Y</span><span class="b5">SHOP</span></a>
                </div>
                <!-- //LOGO -->
                <!-- SEARCH FORM -->
                <div id="search-form" class="pull-right">
                    <form method="get" action="#">
                        <input type="text" name="Search" value="<?= \Yii::t('app', 'Search') ?>"
                               onFocus="if (this.value == 'Search') this.value = '';"
                               onBlur="if (this.value == '') this.value = '<?= \Yii::t('app', 'Search') ?>';"/>
                    </form>
                </div>
                <!-- SEARCH FORM -->
                <!-- MENU -->
                <div class="pull-right">
                    <nav class="navmenu center">

                        <? $items = [];
                           foreach ( \yii\easyii\modules\entity\api\Entity::cat('menu')->items() as $entity) {
                               $items[] = ['label' => \Yii::t('app',$entity->title),'url' => $entity->data->link];
                        };
                        ?>


                        <?= Menu::widget([
                            'options' => ['class' => 'nav navbar-nav'],
                            'items' => $items
                        ]); ?>
                    </nav>
                </div>
                <!-- //MENU -->
            </div>
            <!-- //MENU BLOCK -->
        </div>
        <!-- //CONTAINER -->
    </header>
    <!-- //HEADER -->


    <?

    ?>
  <!--  <main>
        <?php if ($this->context->id != 'site') : ?>
            <br/>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        <?php endif; ?> -->
        <?= $content ?>
<!--        <div class="push"></div>
    </main> -->
</div>

<? /*
<footer>
    <div class="container footer-content">
        <div class="row">
            <div class="col-md-2">
                Subscribe to newsletters
            </div>
            <div class="col-md-6">
                <?php if(Yii::$app->request->get(Subscribe::SENT_VAR)) : ?>
                    You have successfully subscribed
                <?php else : ?>
                    <?= Subscribe::form() ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4 text-right">
                <?='©'.date('Y').' Vlad Nekrasov' ?>
            </div>
        </div>
    </div>
</footer>
 */ ?>

<section id="contacts" style="min-height: 399px;">

</section>
<!-- FOOTER -->
<footer>

    <!-- CONTAINER -->
    <div class="container">

        <!-- ROW -->
        <div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
            <div class="col-lg-4 col-md-4 col-sm-6 padbot30">
                <h4><b>Featured</b> posts</h4>


                <?
                foreach (Article::last(4) as $article) {
                    echo Html::tag('div'
                        , Html::tag('div',
                            Html::img($article->thumb(160, 120))
                            , ['class' => 'post_item_img_small'])
                        . Html::tag('div',
                            Html::a($article->title, ['articles/view', 'slug' => $article->slug])
                            . Html::tag('ul',
                                Html::tag('li',Yii::$app->formatter->asDate($article->date))
                                , ['class' => post_item_inf_small])
                            , ['class' => 'post_item_content_small'])
                        , ['class' => 'recent_posts_small clearfix']);
                };
                ?>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
                <h4><?= \Yii::t('app', '<b>About</b> us') ?></h4>

                <p>We value people over profits, quality over quantity, and keeping it real. As such, we deliver an
                    unmatched working relationship with our clients.</p>

                <p>Our team is intentionally small, eclectic, and skilled; with our in-house expertise, we provide sharp
                    and</p>
                <ul class="social">
                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-pinterest-square"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="map_show fa fa-map-marker"></i></a></li>
                </ul>
            </div>

            <div class="respond_clear"></div>

            <div class="col-lg-4 col-md-4 padbot30">
                <h4><b>Contacts</b> Us</h4>

                <!-- CONTACT FORM -->
                <div class="span9 contact_form">
                    <?//= Feedback::form() ?>

                    <div id="note"></div>
                    <div id="fields">
                        <form id="contact-form-face" class="clearfix" action="#">
                            <input type="text" name="name" value="Name"
                                   onFocus="if (this.value == 'Name') this.value = '';"
                                   onBlur="if (this.value == '') this.value = 'Name';"/>
                            <textarea name="message" onFocus="if (this.value == 'Message') this.value = '';"
                                      onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
                            <input class="contact_btn" type="submit" value="Send message"/>
                        </form>
                    </div>
                </div>
                <!-- //CONTACT FORM -->
            </div>
        </div>
        <!-- //ROW -->
    </div>
    <!-- //CONTAINER -->
</footer><!-- //FOOTER -->

<!-- MAP -->
<div id="map">
    <a class="map_hide" href="javascript:void(0);"><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
<!--    <iframe
        src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;geocode=&amp;q=kemerovo&amp;sll=55.3562975,86.0815234,19&amp;sspn=55.3562975,86.0815234,19&amp;ie=UTF8&amp;hq=&amp;hnear=Kemerovo&amp;ll=55.3562975,86.0815234,19&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed"></iframe>
        -->
</div><!-- //MAP -->

<?php $this->endContent(); ?>
