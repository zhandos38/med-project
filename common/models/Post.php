<?php

namespace common\models;

use kartik\daterange\DateRangeBehavior;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $views
 * @property int $user_id
 * @property int $type_id
 * @property string $image
 * @property int $created_at
 * @property int $updated_at
 *
 * @property User $user
 * @property string $author [varchar(255)]
 */
class Post extends \yii\db\ActiveRecord
{
    const TYPE_NEWS = 0;
    const TYPE_CLINIC_STATE = 1;
    const TYPE_EXPERT_OPINION = 2;

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
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'image', 'author'], 'string'],
            [['views', 'user_id', 'type_id', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['title'], 'required'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['createTimeRange'], 'match', 'pattern' => '/^.+\s\-\s.+$/']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'content' => 'Описание',
            'views' => 'Просмотры',
            'user_id' => 'Автор',
            'type_id' => 'Тип',
            'image' => 'Рисунок',
            'author' => 'Автор',
            'created_at' => 'Дата добавление',
            'updated_at' => 'Дата обновление',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return array
     */
    public function getTypeLabel()
    {
        return ArrayHelper::getValue(static::getTypes(), $this->type_id);
    }

    /**
     * @return array
     */
    public static function getTypes()
    {
        return [
            self::TYPE_NEWS => Yii::t('app', 'Новости'),
            self::TYPE_CLINIC_STATE => Yii::t('app', 'Клинически случай'),
            self::TYPE_EXPERT_OPINION => Yii::t('app', 'Экспертное мнение'),
        ];
    }
}
