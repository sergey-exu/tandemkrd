<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
    <div class="page-container">
		<div class="error-holder">
			<div class="box">
				<p class="error-type">
					<span class="flashing-num-1">4</span>
					<span class="flashing-num-1 del-1">0</span>
					<span class="flashing-num-1 del-2">4</span>
				</p>
			</div>
			<p class="error-text"><?= Html::encode($this->title) ?></p>
			<p><?= nl2br(Html::encode($message)) ?></p>
			<p>вернуться  <a href="/">на главную</a></p>
		</div>
	</div>