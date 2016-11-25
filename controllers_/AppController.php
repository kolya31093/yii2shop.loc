<?php
/**
 * Created by PhpStorm.
 * User: Kolya
 * Date: 18.11.2016
 * Time: 17:57
 */

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller{
    protected function setMeta($title = null, $keywords = null, $description = null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);

    }

}