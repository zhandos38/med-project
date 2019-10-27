<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Member;
use kartik\daterange\DateRangePicker;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model Member */

$this->title = 'Члены общества';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-index">

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

            'full_name',
            'short_description:ntext',
            'email:email',
            [
                'attribute' => 'is_director',
                'value' => function(Member $model) {
                    return $model->is_director ? 'Да' : 'Нет';
                }
            ],
            [
                'attribute' => 'created_at',
                'value' => function(Member $model) {
                    return date('d-m-Y H:i', $model->created_at);
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
