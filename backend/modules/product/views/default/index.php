<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\product\models\Product;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\product\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-body">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function ($model, $key, $index, $column) {
                    return Html::img('/storage/img/products/' . $model->image, ['width' => '100px']);
                },
                'contentOptions' => ['style' => 'width:110px;'],
            ],
            /*
            [
                'attribute' => 'category',
                'filter' => Product::getTypeArray(),
            ],
            */
            'category',
            'group',
            'name',
            // 'data1:ntext',
            // 'data2:ntext',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template'=>'{update} {delete}',
                    'contentOptions' => ['class' => 'actionColumn'],
                    'buttonOptions' => [
                        'class' => 'btn btn-sm btn-default',
                        'style' => 'padding:1px 10px;',
                    ],
                ],
        ],
    ]); ?>
</div></div>
