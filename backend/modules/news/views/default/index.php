<?php

use yii\helpers\Html;
use yii\grid\GridView;
//use Yii;
//use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-body">

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
        <p>
            <?= Html::a(Yii::t('backend', 'Create News'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
    
                //'id',
                'created_at:date',
                'publish_at:date',
                'title',
                //'summary:ntext',
                //'text:ntext',
                //'updated_at:date',
                // 'meta_title',
                // 'meta_description',
                'alias',
                /*
                [
                    'attribute' => 'alias',
                    'format' => 'raw',
                    'value' => function ($model, $key, $index, $column) {
                        return Html::a(Html::encode($model->alias), ['/news', 'alias' => $model->alias]);
                    }
                ],
                */
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template'=>'{update} {delete}',
                    'contentOptions' => ['class' => 'actionColumn'],
                    'buttonOptions' => [
                        'class' => 'btn btn-xs btn-default'
                    ],
                ],
            ],
        ]); ?>
        
        
    </div>
</div>
