<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 26.10.2019
 * Time: 19:18
 */

namespace frontend\controllers;


use common\models\Member;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;
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
        if (\Yii::$app->request->isAjax) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            $marks = '{ 
                        "type":"Feature",
                        "id":0,
                        "geometry":{ 
                           "type":"Point",
                           "coordinates":[ 
                              51.198222, 71.416985
                           ]
                        },
                        "properties":{ 
                           "balloonContentBody":"Body",
                           "balloonContentFooter":"footer",
                           "hintContent":"<strong>Текст  <s>подсказки</s></strong>"
                        }
                    }';

            $data = '{
                        "type":"FeatureCollection",
                        "features":[ 
                            ' . $marks . '
                        ]
                    }';

            return $data;
        }

        return $this->render('geography');
    }
}