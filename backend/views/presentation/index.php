<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Presentation;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PresentationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Презентации';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presentation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name:ntext',
            'file',
            'author',
            'views',
            'year',
            [
                'attribute' => 'created_at',
                'value' => function(Presentation $model) {
                    return  date('d-m-Y H:i', $model->created_at);
                }
            ],
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
