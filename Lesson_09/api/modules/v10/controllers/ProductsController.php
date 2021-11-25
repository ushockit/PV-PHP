<?php

namespace app\api\modules\v10\controllers;

use yii\rest\ActiveController;

class ProductsController extends ActiveController
{
    public $modelClass = 'app\api\modules\v10\models\Product';

//    public function behaviors() {
//        return [
//            [
//                'class' => \yii\filters\ContentNegotiator::className(),
//                'only' => [],
//                'formats' => [
//                    'application/json' => \yii\web\Response::FORMAT_JSON,
//                ],
//            ],
//        ];
//    }
    public function actions()
    {
        $actions = parent::actions();
        // unset($actions['create']);
        // unset($actions['index']);
        return $actions;
    }

    public function actionIndex() {
        return [];
    }
//
//    public function actionCreate() {
//        $params = \Yii::$app->request->post();
//        $prod = new Product();
//        $prod->name = $params['name'];
//        $prod->price = $params['price'];
//        $prod->save();
//        return $prod;
//    }
}