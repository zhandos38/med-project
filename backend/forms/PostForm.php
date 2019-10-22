<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 13.10.2019
 * Time: 18:22
 */

namespace backend\forms;


use common\models\Post;
use yii\base\Model;

class PostForm extends Model
{
    public $content;
    public $title;
    public $type_id;
    public $imageFile;

    public function rules()
    {
        return [
            [['content'], 'string'],
            ['type_id', 'integer'],
            [['title'], 'string', 'max' => 255],
            [['title'], 'required'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Название',
            'content' => 'Контент',
            'type_id' => 'Тип',
            'imageFile' => 'Рисунок'
        ];
    }

    public function upload()
    {   $imgPath = \Yii::getAlias('@static');
        if ($this->validate()) {
            $this->imageFile->saveAs($imgPath . '/posts/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

    public function save()
    {
        $model = new Post();
        $model->title = $this->title;
        $model->content = $this->content;
        $model->type_id = $this->type_id;
        $model->user_id = \Yii::$app->user->identity->getId();
        $model->image = $this->imageFile->baseName . '.' . $this->imageFile->extension;
        if ($model->save()) {
            return true;
        }
        return false;
    }
}