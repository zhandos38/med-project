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
}