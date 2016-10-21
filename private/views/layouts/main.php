<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon"/>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
	<nav>
	    <div class="nav-wrapper container">
	        <a href="#" class="brand-logo"><?= Html::img('img/logo.png', ['alt' => 'denny+ logo']); ?></a>
	        <ul id="nav-mobile" class="right">
	            <li><a href="http://denny-plus.blog.cz/">čištění autointeriérů</a></li>
	            <li><a href="http://www.ubytovani-dacice.cz/">ubytování v Dačicích</a></li>
	        </ul>
	    </div>
	</nav>
</header>

<main>
    <?= $content ?>
</main>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; DENNY+ Milan Králík <?= date('Y') ?></p>
        <p class="pull-right">Webdesign by <?= Html::a('C@mus', 'http://www.camus.cz') ?></p>
        <p class="text-center"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
