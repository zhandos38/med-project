<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Tutorial;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\TutorialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Учебные пособие';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutorials-index">

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

            'name',
            'description',
            'image',
            [
                'attribute' => 'created_at',
                'value' => function(Tutorial $model) {
                    return date('d-m-Y H:i', $model->created_at);
                }
            ],
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
