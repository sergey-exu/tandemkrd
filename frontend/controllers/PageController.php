<?php

namespace frontend\controllers;

use Yii;
use backend\modules\page\models\Page;
use backend\modules\product\models\Product;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


/**
 * PageController implements the CRUD actions for Page model.
 */
class PageController extends Controller
{
    //public $layout = 'column2';
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionView($alias)
    {
        $model = Page::find()->where(['alias'=>$alias])->one();
        
        if(!$model){
            throw new NotFoundHttpException(\Yii::t('common', 'Page not found'));
        }
        
        
        
        switch ($alias) {
            case 'chemistry':
                $data = Product::find()->where(['category'=>'Бытовая химия'])->all();
                $category = Product::find()->select('group')->distinct()->where(['category'=>'Бытовая химия'])->all();
                break;
                
            case 'household-goods':
                $data = Product::find()->where(['category'=>'Товары хоз.назначения'])->all();
                $category = Product::find()->select('group')->distinct()->where(['category'=>'Товары хоз.назначения'])->all();
                break;
                
            case 'packages':
                $data = Product::find()->where(['category'=>'Пакеты'])->all();
                $category = Product::find()->select('group')->distinct()->where(['category'=>'Пакеты'])->all();
                break;
                
            case 'tape':
                $data = Product::find()->where(['category'=>'Пленка и скотч'])->all();
                $category = Product::find()->select('group')->distinct()->where(['category'=>'Пленка и скотч'])->all();
                break;
            
            case 'dishes':
                $data = Product::find()->where(['category'=>'Одноразовая посуда'])->all();
                $category = Product::find()->select('group')->distinct()->where(['category'=>'Одноразовая посуда'])->all();
                break;
            
            case 'plastic-box':
                $data = Product::find()->where(['category'=>'Пластиковая упаковка'])->all();
                $category = Product::find()->select('group')->distinct()->where(['category'=>'Пластиковая упаковка'])->all();
                break;
            
            case 'launch-box':
                $data = Product::find()->where(['category'=>'Ланч-боксы. лотки и подложки'])->all();
                $category = Product::find()->select('group')->distinct()->where(['category'=>'Ланч-боксы. лотки и подложки'])->all();
                break;
                
            case 'eggs':
                $data = Product::find()->where(['category'=>'Яичная упаковка'])->all();
                $category = Product::find()->select('group')->distinct()->where(['category'=>'Яичная упаковка'])->all();
                break;
            
        }
        
       
        return $this->render('view', [
            'model'=>$model,
            'data'=>$data,
            'category'=>$category
        ]);
    }
    
}
