<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tutorials".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $file
 * @property int $created_at
 * @property int $updated_at
 * @property int $type_id [int(11)]
 */
class Tutorial extends \yii\db\ActiveRecord
{
    public $imageFile;
    public $tutorialFile;

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tutorial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'tutorial'], 'integer'],
            [['name', 'description', 'image', 'file'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['tutorialFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf, doc, docx, djvu'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'description' => 'Описание',
            'image' => 'Рисунок',
            'file' => 'Файл',
            'created_at' => 'Создано в',
            'updated_at' => 'Обнавлено в',
            'type_id' => 'Тип документа'
        ];
    }

    public function upload()
    {   $imgPath = \Yii::getAlias('@static');
        if ($this->validate()) {
            $this->imageFile->saveAs($imgPath . '/web/tutorials/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            $this->tutorialFile->saveAs($imgPath . '/web/tutorials/' . $this->tutorialFile->baseName . '.' . $this->tutorialFile->extension);
            return true;
        } else {
            return false;
        }
    }

    public function beforeSave($insert)
    {
        if (!$this->image || $insert['image'])
            $this->image = $this->imageFile->baseName . '.' . $this->imageFile->extension;

        if (!$this->file || $insert['file'])
            $this->file = $this->tutorialFile->baseName . '.' . $this->tutorialFile->extension;

        return true;
    }
}
