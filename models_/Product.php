<?php
/**
 * Created by PhpStorm.
 * User: Kolya
 * Date: 17.11.2016
 * Time: 18:14
 */

namespace app\models;

use yii\db\ActiveRecord;
class Product extends ActiveRecord{

    public static function tableName(){
        return 'product';
    }
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'catalog_id']);
    }
}