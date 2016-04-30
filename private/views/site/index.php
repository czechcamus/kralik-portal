<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'DENNY+ Milan Králík';
?>
<div class="slider fullscreen">
	<ul class="slides">
		<li>
			<?= Html::img( 'img/pokoj.jpg', [
				'alt' => 'obrázek - pokoj'
			] ); ?>
			<div class="caption left-align">
				<h3><?= Html::a('Privát Denny+', 'http://www.ubytovani-dacice.cz'); ?></h3>
				<h5 class="light grey-text text-lighten-3">Ubytování v soukromí v Dačicích</h5>
			</div>
		</li>
		<li>
			<?= Html::img( 'img/autointerier.jpg', [
				'alt' => 'obrázek - autointeriér'
			] ); ?>
			<div class="caption right-align">
				<h3><?= Html::a('Čištění autointeriérů', '#!'); ?></h3>
				<h5 class="light grey-text text-lighten-3">Profesionální služby za rozumné ceny</h5>
			</div>
		</li>
	</ul>
</div>