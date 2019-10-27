<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 13.10.2019
 * Time: 18:22
 */

namespace backend\forms;


use common\models\Document;
use common\models\Post;
use yii\base\Model;

class DocumentForm extends Model
{
    public $name;
    public $file;

    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
            [['name'], 'required'],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf, doc, docx'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Название',
            'file' => 'Рисунок'
        ];
    }

    public function upload()
    {   $imgPath = \Yii::getAlias('@static');
        if ($this->validate()) {
            $this->file->saveAs($imgPath . '/web/documents/' . $this->file->baseName . '.' . $this->file->extension);
            return true;
        } else {
            return false;
        }
    }

    public function save()
    {
        $model = new Document();
        $model->name = $this->name;
        $model->type = $this->file->extension;
        $model->size = strval(number_format($this->file->size/1024/1024, 2, '.', ''));
        $model->document = $this->file->baseName . '.' . $this->file->extension;
        if ($model->save()) {
            return true;
        }
        return false;
    }
}