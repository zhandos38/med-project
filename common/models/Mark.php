<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "mark".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property int $building_category_id
 * @property int $floors
 * @property int $built_at
 * @property int $building_type_id
 * @property string $destination
 * @property string $working_hours [varchar(255)]
 * @property int $availability_id [int(11)]
 * @property string $latitude [varchar(255)]
 * @property string $longitude [varchar(255)]
 * @property int $type_id [int(11)]
 */
class Mark extends \yii\db\ActiveRecord
{
    const AVAILABILITY_NO = 0;
    const AVAILABILITY_HALF = 1;
    const AVAILABILITY_YES = 2;

    const TYPE_HOSPITAL = 0;
    const TYPE_RESTAURANT = 1;
    const TYPE_SHOP = 2;
    const TYPE_PHARMACY = 3;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mark';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['building_category_id', 'floors', 'built_at', 'building_type_id', 'type_id'], 'integer'],
            [['name', 'address'], 'string', 'max' => 255],
            [ 'destination', 'string'],
            [['longitude', 'latitude'], 'number']
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
            'address' => 'Адрес',
            'type_id' => 'Тип',
            'building_category_id' => 'Категория',
            'floors' => 'Этажы',
            'built_at' => 'Год постройки',
            'building_type_id' => 'Тип недвижимости',
            'destination' => 'Описание',
            'longitude' => 'Долгота',
            'latitude' => 'Ширина',
        ];
    }

    public static function getAvailabilitiesLabel()
    {
        return [
            self::AVAILABILITY_NO => 'Не доступен',
            self::AVAILABILITY_HALF => 'Частично доступен',
            self::AVAILABILITY_YES => 'Доступен',
        ];
    }

    public function getAvailabilityLabel()
    {
        return ArrayHelper::getValue($this->getAvailabilitiesLabel(), $this->availability_id);
    }

    public static function getTypesLabel()
    {
        return [
            self::TYPE_HOSPITAL => 'Больница',
            self::TYPE_RESTAURANT => 'Ресторан',
            self::TYPE_SHOP => 'Маганзин',
            self::TYPE_PHARMACY => 'Аптека',
        ];
    }

    public function getTypeLabel()
    {
        return ArrayHelper::getValue($this->getTypesLabel(), $this->type_id);
    }

    public static function getTypesIcon()
    {
        return [
            self::TYPE_HOSPITAL => 'islands#blueMedicalIcon',
            self::TYPE_RESTAURANT => 'islands#blueFoodIcon',
            self::TYPE_SHOP => 'islands#blueShoppingIcon',
            self::TYPE_PHARMACY => 'islands#blueMedicalIcon',
        ];
    }

    public function getTypeIcon()
    {
        return ArrayHelper::getValue($this->getTypesIcon(), $this->type_id);
    }
}
