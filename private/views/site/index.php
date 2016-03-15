<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'DENNY+ Milan Králík';
?>
<div class="container">
	<div class="site-index">

		<div id="carousel-index" class="carousel slide" data-ride="carousel" data-interval="10000">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-index" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-index" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<?= Html::img( 'img/pokoj.jpg', [
						'alt' => 'obrázek - pokoj'
					] ); ?>
					<div class="carousel-caption">
						<h3><?= Html::a('Privát Denny+', 'http://www.ubytovani-dacice.cz'); ?></h3>
						<p>Ubytování v soukromí v Dačicích</p>
					</div>
				</div>
				<div class="item">
					<?= Html::img( 'img/autointerier.jpg', [
						'alt' => 'obrázek - autointeriér'
					] ); ?>
					<div class="carousel-caption">
						<h3><?= Html::a('Čištění autointeriérů', '#!'); ?></h3>
						<p>Profesionální služby za rozumné ceny</p>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-index" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">předchozí</span>
			</a>
			<a class="right carousel-control" href="#carousel-index" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">následující</span>
			</a>
		</div>

	</div>
</div>