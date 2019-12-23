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
use yii\filters\AccessControl;
use yii\web\Controller;

class EventsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['?', '@']
                    ]
                ],
            ],
        ];
    }

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

    public function actionView($id)
    {
        $model = Event::findOne(['id' => $id]);

        return $this->render('view', ['model' => $model]);
    }

    public function actionLast()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Event::find()->where(['<','start_at',time()]),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionFuture()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Event::find()->where(['>','start_at',time()]),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
}