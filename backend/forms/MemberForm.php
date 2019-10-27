<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 13.10.2019
 * Time: 18:22
 */

namespace backend\forms;


use common\models\Member;
use yii\base\Model;

class MemberForm extends Model
{
    public $full_name;
    public $short_description;
    public $description;
    public $email;
    public $imageFile;

    public function rules()
    {
        return [
            [['description'], 'string'],
            ['email', 'email'],
            [['full_name', 'short_description'], 'string', 'max' => 255],
            [['full_name', 'email'], 'required'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'full_name' => 'Полное имя',
            'short_description' => 'Короткая описание',
            'description' => 'Описание',
            'email' => 'email',
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

    public function save()
    {
        $model = new Member();
        $model->full_name = $this->full_name;
        $model->short_description = $this->short_description;
        $model->description = $this->description;
        $model->email = $this->email;
        $model->image = $this->imageFile->baseName . '.' . $this->imageFile->extension;
        if ($model->save()) {
            return true;
        }
        return false;
    }
}