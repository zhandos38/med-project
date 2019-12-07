<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 26.10.2019
 * Time: 19:18
 */

namespace frontend\controllers;


use common\models\Document;
use common\models\Mark;
use common\models\Member;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;
use yii\helpers\VarDumper;
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
        $marksModel = Mark::find()->all();

        foreach ($marksModel as $mark) {
            $marks[] = [
                'type' => "Feature",
                "id" => $mark->id,
                "geometry" => [
                    "type" => "Point",
                    "coordinates" => [
                        $mark->latitude, $mark->longitude
                    ]
                ],
                "properties" => [
                    "type" => $mark->getTypeLabel(),
                    "balloonContent" => $mark->destination,
                    "hintContent" => $mark->getTypeLabel(),
                    "clusterCaption" => $mark->getTypeLabel(),
                    "iconCaption" => $mark->getTypeLabel()
                ],
                "options" => [
                    "preset" => $mark->getTypeIcon(),
                ]
            ];
        }

        return $this->render('geography', ['marks' => Json::encode($marks)]);
    }
}