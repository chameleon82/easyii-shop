<?php
use yii\helpers\Html;
$asset = \app\themes\white\assets\AppAsset::register($this);
//echo $this->theme->getUrl('')
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">

        <?php $this->head() ?>

        <!-- CSS -->
        <link href="<?= $asset->baseUrl ?>/css/flexslider.css" rel="stylesheet" type="text/css" />
        <link href="<?= $asset->baseUrl ?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?= $asset->baseUrl ?>/css/animate.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?= $asset->baseUrl ?>/css/owl.carousel.css" rel="stylesheet" media="all" />
        <link href="<?= $asset->baseUrl ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"  media="all" />
        <link href="<?= $asset->baseUrl ?>/css/white_style.css" rel="stylesheet" type="text/css"  media="all" />
        <link href="<?= $asset->baseUrl ?>/css/style.css" rel="stylesheet" type="text/css"  media="all" />


        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <!-- SCRIPTS -->
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE]><html class="ie" lang="en"> <![endif]-->

        <?
        $this->registerJsFile( $asset->baseUrl.'/js/jquery.nicescroll.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
        $this->registerJsFile( $asset->baseUrl.'/js/superfish.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
        $this->registerJsFile( $asset->baseUrl.'/js/jquery.flexslider-min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
        $this->registerJsFile( $asset->baseUrl.'/js/owl.carousel.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
        $this->registerJsFile( $asset->baseUrl.'/js/animate.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
        $this->registerJsFile( $asset->baseUrl.'/js/myscript.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
        $this->registerJsFile( $asset->baseUrl.'/js/jquery.prettyPhoto.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
        $this->registerJsFile( $asset->baseUrl.'/js/jquery.BlackAndWhite.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
        $this->registerJS( '
        //PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^=\'prettyPhoto\']").prettyPhoto();
		});

		//BlackAndWhite
		$(window).load(function(){
			$(\'.client_img\').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
        ');
        ?>

    </head>
    <body>
    <!-- PRELOADER -->
    <img id="preloader" src="<?= $asset->baseUrl ?>/images/preloader.gif" alt="" />
    <!-- //PRELOADER -->
    <div class="preloader_hide">
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
        </div>
    </body>
    </html>
<?php $this->endPage() ?>