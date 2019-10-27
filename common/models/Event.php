<?php

namespace common\models;

use kartik\daterange\DateRangeBehavior;
use Yii;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $name
 * @property string $where
 * @property int $start_at
 * @property int $finish_at
 * @property string $place
 * @property string $content
 *
 * @property int $created_at
 * @property int $updated_at
 */
class Event extends \yii\db\ActiveRecord
{
    public $createTimeRange;
    public $createTimeStart;
    public $createTimeEnd;

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
            ],
            [
                'class' => DateRangeBehavior::className(),
                'attribute' => 'createTimeRange',
                'dateStartAttribute' => 'createTimeStart',
                'dateEndAttribute' => 'createTimeEnd',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'where', 'place', 'content'], 'string'],
            [['start_at', 'finish_at', 'created_at', 'updated_at'], 'integer'],
            [['createTimeRange'], 'match', 'pattern' => '/^.+\s\-\s.+$/']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Название',
            'where' => 'Где',
            'start_at' => 'Начало',
            'finish_at' => 'Конец',
            'place' => 'Место',
            'content' => 'Контент',
            'createTimeRange' => 'Дата',
            'created_at' => 'Добавлено',
            'updated_at' => 'Обнавлено'
        ];
    }

    public function beforeSave($insert)
    {
        $this->start_at = $this->createTimeStart;
        $this->finish_at = $this->createTimeEnd;
        return true;
    }
}
