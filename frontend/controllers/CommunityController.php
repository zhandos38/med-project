<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 26.10.2019
 * Time: 19:18
 */

namespace frontend\controllers;


use common\models\Document;
use common\models\Member;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class CommunityController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Member::find(),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays statute page.
     *
     * @return mixed
     */
    public function actionStatute()
    {
        return $this->render('statute');
    }

    /**
     * Displays statute page.
     *
     * @return mixed
     */
    public function actionHistory()
    {
        return $this->render('history');
    }

    /**
     * Displays statute page.
     *
     * @return mixed
     */
    public function actionDocuments()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Document::find(),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);
        return $this->render('documents', ['dataProvider' => $dataProvider]);
    }

    public function actionDirection()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Member::find()->where(['is_director' => Member::IS_DIRECTOR_YES]),
            'pagination' => [
                'pageSize' => 6
            ]
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionMember($id)
    {
        $member = Member::findOne(['id' => $id]);
        return $this->render('member', [
            'model' => $member
        ]);
    }

    public function actionGeography()
    {
        $hospitals = '[{
                        "type":"Feature",
                        "id":0,
                        "geometry":{
                           "type":"Point",
                           "coordinates":[
                              51.198222, 71.416985
                           ]
                        },
                        "properties":{
                           "type": "Больница",
                           "balloonContent":"Больница",
                           "hintContent":"<strong>Больница</strong>",
                           "clusterCaption": "Больница",
                           "iconCaption": "Больница"
                        },
                         "options": {
                            "preset": "islands#blueMedicalIcon"
                        }
                    },
                    {
                        "type":"Feature",
                        "id":1,
                        "geometry":{
                           "type":"Point",
                           "coordinates":[
                              51.198222, 71.5
                           ]
                        },
                        "properties":{
                           "type": "Аптека",
                           "balloonContent":"Аптека",
                           "hintContent":"<strong>Аптека</strong>",
                           "clusterCaption": "Аптека",
                           "iconCaption": "Аптека"
                        },
                         "options": {
                            "preset": "islands#blueMedicalIcon"
                        }
                    },
                    {
                        "type":"Feature",
                        "id":2,
                        "geometry":{
                           "type":"Point",
                           "coordinates":[
                              51.3, 71.5
                           ]
                        },
                        "properties":{
                           "type": "Кафе",
                           "balloonContent":"Кафе",
                           "hintContent":"<strong>Кафе</strong>",
                           "clusterCaption": "Кафе",
                           "iconCaption": "Кафе"
                        },
                         "options": {
                            "preset": "islands#blueMedicalIcon"
                        }
                    }]';


        return $this->render('geography', ['hospitals' => $hospitals]);
    }
}