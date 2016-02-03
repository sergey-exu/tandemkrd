<?php

use yii\helpers\Html;

$this->title = $model->meta_title;
$this->registerMetaTag(['name' => 'description', 'content' => $model->meta_description]);
$this->params['breadcrumbs'][] = $model->title;
?>

<div class="page-view">
    <h1><?= Html::encode($model->page_title) ?></h1>
    <div><?= Html::decode($model->page_content) ?></div>
</div>
