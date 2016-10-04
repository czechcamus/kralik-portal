<?php

/* @var $this yii\web\View */

$this->title = 'DENNY+ Milan Králík';
?>
<div class="site-index">
	<div class="slider fullscreen">
		<ul class="slides">
			<li>
				<img src="<?= Yii::$app->request->baseUrl; ?>/img/autointerier.jpg">
				<div class="caption center-align">
					<h3>Čištění autointeriérů</h3>
					<h5 class="light grey-text text-lighten-3">Profesionální práce je naší vizitkou.</h5>
					<a class="waves-effect waves-light btn-large"><i class="material-icons right">send</i>zjistit více</a>
				</div>
			</li>
			<li>
				<img src="<?= Yii::$app->request->baseUrl; ?>/img/pokoj.jpg">
				<div class="caption center-align">
					<h3>Ubytování v Dačicích</h3>
					<h5 class="light grey-text text-lighten-3">Ubytování v klidném prostředí.</h5>
					<a class="waves-effect waves-light btn-large"><i class="material-icons right">send</i>zjistit více</a>
				</div>
			</li>
		</ul>
	</div>
</div>