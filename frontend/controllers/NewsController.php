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
            'query' => Post::find()->andWhere(['type_id' => Post::TYPE_NEWS]),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionView($id)
    {
        $model = Post::findOne(['id' => $id]);
        $model->views += 1;
        $model->save();

        return $this->render('view', [
            'model' => $model
        ]);
    }
}