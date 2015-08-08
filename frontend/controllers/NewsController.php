<?php

namespace frontend\controllers;

use Yii;
use backend\modules\news\models\News;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => News::find(),
            'pagination' => ['pageSize' => 10],
            'sort'=> ['defaultOrder' => ['id'=>SORT_DESC]],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionView($alias)
    {
        return $this->render('view', [
            'model' => $this->findModel($alias),
        ]);
    }

    
    protected function findModel($alias)
    {
        if (($model = News::find()->where(['alias'=>$alias])->one()) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}