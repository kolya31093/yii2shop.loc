<?php
/**
 * Created by PhpStorm.
 * User: Kolya
 * Date: 17.11.2016
 * Time: 18:14
 */

namespace app\models;

use yii\db\ActiveRecord;
class Category extends ActiveRecord{

        public static function tableName(){
            return 'category';
        }
         public function getProducts(){
             return $this->hasMany(Product::className(), ['category_id' => 'id']);
         }
}

