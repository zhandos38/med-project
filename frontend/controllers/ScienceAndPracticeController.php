<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 03.11.2019
 * Time: 20:28
 */

namespace frontend\controllers;


use common\models\Post;
use common\models\Presentation;
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

    public function actionRecommendation($id)
    {
        $model = Post::findOne(['id' => $id]);
        return $this->render('recommendation', ['model' => $model]);
    }

    public function actionPublications()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find()->where(['type_id' => Post::TYPE_PUBLICATION]),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);
        return $this->render('publications', ['dataProvider' => $dataProvider]);
    }

    public function actionPublication($id)
    {
        $model = Post::findOne(['id' => $id]);
        return $this->render('publication', ['model' => $model]);
    }

    public function actionClinicCases()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find()->andWhere(['type_id' => Post::TYPE_CLINIC_STATE]),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);

        return $this->render('clinic-cases', ['dataProvider' => $dataProvider]);
    }

    public function actionClinicCase($id)
    {
        $model = Post::findOne(['id' => $id]);
        $model->views += 1;
        $model->save();

        return $this->render('clinic-case', [
            'model' => $model
        ]);
    }

    public function actionPresentations()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Presentation::find(),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);

        return $this->render('presentations', ['dataProvider' => $dataProvider]);
    }

    public function actionVideoBroadcasts()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find()->andWhere(['type_id' => Post::TYPE_VIDEO_BROADCAST]),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);

        return $this->render('video-broadcasts', ['dataProvider' => $dataProvider]);
    }

    public function actionVideoBroadcast($id)
    {
        $model = Post::findOne(['id' => $id]);

        return $this->render('video-broadcast', ['model' => $model]);
    }


    public function actionExpertOpinions()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find()->andWhere(['type_id' => Post::TYPE_EXPERT_OPINION]),
            'pagination' => [
                'pageSize' => 4
            ]
        ]);

        return $this->render('expert-opinions', ['dataProvider' => $dataProvider]);
    }

    public function actionExpertOpinion($id)
    {
        $model = Post::findOne(['id' => $id]);

        return $this->render('expert-opinion', ['model' => $model]);
    }
}