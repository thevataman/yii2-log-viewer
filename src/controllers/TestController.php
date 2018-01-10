<?php
namespace vataman\logviewer\controllers;

use Yii;
use yii\web\Controller;
use vataman\logviewer\models\Tests;
class TestController extends Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        $this->layout = false;
        // регистрируем ресурсы:
        \vataman\logviewer\TestsAssetsBundle::register($this->view);
        //$datas = Tests::find()->all();
        $datas = ['one','two','thre'];
        return $this->render('index',[
            'datas' => $datas
        ]);
    }
}