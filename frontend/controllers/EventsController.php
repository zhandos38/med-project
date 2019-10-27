<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 24.10.2019
 * Time: 21:20
 */

namespace frontend\controllers;


use common\models\Event;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class EventsController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Event::find(),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

}