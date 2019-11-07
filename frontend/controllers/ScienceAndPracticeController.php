<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 03.11.2019
 * Time: 20:28
 */

namespace frontend\controllers;


use common\models\Post;
use common\models\Tutorial;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class ScienceAndPracticeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTutorials()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Tutorial::find(),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);
        return $this->render('tutorials', ['dataProvider' => $dataProvider]);
    }

    public function actionRecommendations()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find()->where(['type_id' => Post::TYPE_RECOMMENDATION]),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);
        return $this->render('recommendations', ['dataProvider' => $dataProvider]);
    }

    public function actionViewRecommendation($id)
    {
        $model = Post::findOne(['id' => $id]);
        return $this->render('view-recommendation', ['model' => $model]);
    }
}