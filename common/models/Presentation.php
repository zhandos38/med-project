<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "presentation".
 *
 * @property int $id
 * @property string $name
 * @property string $file
 * @property string $author
 * @property int $views
 * @property int $year
 * @property int $created_at
 * @property int $updated_at
 */
class Presentation extends \yii\db\ActiveRecord
{
    public $presentationFile;

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
        return 'presentation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
            [['views', 'year', 'created_at', 'updated_at'], 'integer'],
            [['file', 'author'], 'string', 'max' => 255],
            [['presentationFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf, doc, docx, djvu, pptx'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'file' => 'Файл',
            'author' => 'Автор',
            'views' => 'Просмотры',
            'year' => 'Год',
            'created_at' => 'Добавлено в',
            'updated_at' => 'Обновлено в',
            'presentationFile' => 'Документ'
        ];
    }

    public function upload()
    {
        if ($this->presentationFile === null) {
            return true;
        }

        $filePath = \Yii::getAlias('@static') . '/web/presentations/' . $this->presentationFile->baseName . '.' . $this->presentationFile->extension;

        if ($this->validate()) {
            $this->presentationFile->saveAs($filePath);
            return true;
        } else {
            return false;
        }
    }
}
