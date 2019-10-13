<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 13.10.2019
 * Time: 15:03
 */

namespace frontend\controllers;


use common\models\Post;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class NewsController extends Controller
{

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find()->andWhere(['type_id' => 0]),
            'pagination' => [
                'pageSize' => 12
            ]
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
}