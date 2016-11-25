<?php
/**
 * Created by PhpStorm.
 * User: Kolya
 * Date: 25.11.2016
 * Time: 11:00
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController{
    public function actionView($id){
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);//jadnaya
//        $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();//lenibaya
        return $this->render('view', compact('product'));
    }
}