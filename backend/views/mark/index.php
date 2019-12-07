<?php

use common\models\Mark;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MarkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Маркеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mark-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить маркер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'address',
            [
                'attribute' => 'type_id',
                'value' => function(Mark $model) {
                    return $model->getTypeLabel();
                }
            ],
            'floors',
            //'built_at',
            //'building_type_id',
            //'destination',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
