<?php

namespace common\models;

use Yii;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "member".
 *
 * @property int $id
 * @property string $full_name
 * @property string $short_description
 * @property string $description
 * @property string $email
 * @property string $image
 * @property boolean $is_director
 *
 * @property integer created_at
 * @property integer updated_at
 */
class Member extends \yii\db\ActiveRecord
{
    public $imageFile;

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['full_name', 'short_description', 'image'], 'string', 'max' => 255],
            [['created_at', 'updated_at'], 'integer'],
            ['is_director', 'boolean'],
            ['email', 'email'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'full_name' => 'Полное имя',
            'short_description' => 'Короткая описание',
            'description' => 'Описание',
            'email' => 'Почта',
            'image' => 'Фотография',
            'is_director' => 'Правитель',
            'created_at' => 'Добавлено в',
            'imageFile' => 'Рисунок'
        ];
    }

    public function upload()
    {   $imgPath = \Yii::getAlias('@static');
        if ($this->validate()) {
            $this->imageFile->saveAs($imgPath . '/web/members/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

    public function beforeSave($insert)
    {
        if (!$this->image || $insert['image'])
            $this->image = $this->imageFile->baseName . '.' . $this->imageFile->extension;
        return true;
    }
}
