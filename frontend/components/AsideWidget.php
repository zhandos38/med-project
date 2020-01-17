<?php

namespace frontend\components;

use common\models\Event;
use common\models\Post;

/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 17.01.2020
 * Time: 23:27
 */

class AsideWidget extends \yii\base\Widget
{
    public function run()
    {
        $lastEvents = Event::find()->limit(2)->orderBy(['id' => SORT_DESC])->all();
        $expertOpinion = Post::find()->where(['type_id' => Post::TYPE_EXPERT_OPINION])->orderBy(['id' => SORT_DESC])->one();
        return $this->render('aside', ['lastEvents' => $lastEvents, 'expertOpinion' => $expertOpinion]);
    }
}