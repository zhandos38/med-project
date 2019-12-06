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
                           "balloonContent":"<h6>2-ая городская больница</h6><div><i class=\"fa fa-location-arrow\"></i> Центральный район, проспект Победителей, 11</div><div><b>Время работы:</b> пн-пт: 10.00-20.00, сб-вс: 10.00-18.00</div><div class=\"map__marker-block\"><p><b>Вход:</b> количество ступеней: 4, пандус (количество маршей: 2), Уклон не более 1/12, имеются поручниПри двух наклонных маршах, пандус не имеет промежуточной площадки.</p><p><b>Входные двери:</b> 2-створчатая, ширина створки: 74 см и более, высота порога: 3 см, наличие тамбура: есть, Двери открываются туго, но широко в обе стороны</p><p><b>Внутреннее пространство:</b> пандус, За входными дверями расположен пандус уклон 11% (соотношение высоты к длине 1/9) ведущий к торговым рядам на 1-й этаж.</p><p><b>Туалет:</b> Общественный</p></div>",
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