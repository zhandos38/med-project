<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Event;
use kartik\daterange\DateRangePicker;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\EventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мероприятии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name:ntext',
            'where',
            [
                'attribute' => 'start_at',
                'value' => function(Event $model) {
                    return date('d-m-Y', $model->start_at);
                }
            ],
            [
                'attribute' => 'finish_at',
                'value' => function(Event $model) {
                    return date('d-m-Y', $model->finish_at);
                }
            ],
            'place',
            //'content:ntext',
            [
                'attribute' => 'created_at',
                'value' => function(Event $model) {
                    return date('d-m-Y', $model->finish_at);
                },
                'filter' => DateRangePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'createTimeRange',
                    'convertFormat' => true,
                    'pluginOptions' => [
                        'locale' => [
                            'format'=>'Y-m-d'
                        ],
                        'convertFormat'=>true,
                    ]
                ]),
            ],
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
