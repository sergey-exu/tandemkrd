<?php

namespace backend\modules\product\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $category
 * @property string $group
 * @property string $image
 * @property string $name
 * @property string $data1
 * @property string $data2
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'group', 'image', 'name', 'data1', 'data2'], 'required'],
            [['data1', 'data2'], 'string'],
            [['category', 'group', 'image'], 'string', 'max' => 128],
            [['name'], 'string', 'max' => 256],
        ];
    }
    
    public static function getTypeArray()
    {
        return Product::find()->select('category')->distinct()->asArray()->all();
    }
    
    

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Раздел',
            'group' => 'Категория',
            'image' => 'Картинка',
            'name' => 'Название',
            'data1' => 'Описание 1',
            'data2' => 'Описание 2',
        ];
    }
}
