<?php
namespace common\models;

use rmrevin\yii\module\Comments\interfaces\CommentatorInterface;
use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $verification_token
 * @property string $email
 * @property string $auth_key
 * @property string $full_name
 * @property string $address
 * @property string $phone
 * @property integer $status
 * @property integer $role
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 * @property int $code_number [int(11)]
 * @property string $workplace [varchar(255)]
 * @property string $speciality [varchar(255)]
 * @property string $degree [varchar(255)]
 * @property string $description [varchar(255)]
 * @property int $city [int(11)]
 * @property int $birthday [int(11)]
 * @property string $position [varchar(255)]
 * @property string $avatar_url [varchar(255)]
 */
class User extends ActiveRecord implements IdentityInterface, CommentatorInterface
{
    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;

    const ROLE_ADMIN = 'admin';
    const ROLE_MANAGER = 'manager';
    const ROLE_DIRECTOR = 'director';

    const CITY_NURSULTAN = 0;
    const CITY_ALMATY = 1;
    const CITY_SHYMKENT = 2;
    const CITY_KARAGANDA = 3;
    const CITY_KYZYLORDA = 4;
    const CITY_TARAZ = 5;
    const CITY_AKTAU = 6;
    const CITY_ATYRAU = 7;
    const CITY_AKTOBE = 8;
    const CITY_USKAMAN = 9;
    const CITY_SEMEY = 10;
    const CITY_KUSTANAY = 11;
    const CITY_PAVLODAR = 12;
    const CITY_PETROPAVL = 13;
    const CITY_TALDYKORGAN = 14;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_INACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_DELETED]],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'full_name' => 'Ф.И.О',
            'phone' => 'Телефон',
            'code_number' => 'Номер карты',
            'role' => 'Роль',
            'status' => 'Статус',
            'created_at' => 'Дата добавление'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds user by verification email token
     *
     * @param string $token verify email token
     * @return static|null
     */
    public static function findByVerificationToken($token) {
        return static::findOne([
            'verification_token' => $token,
            'status' => self::STATUS_INACTIVE
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    public function generateEmailVerificationToken()
    {
        $this->verification_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public static function getStatuses() {
        return [
            self::STATUS_DELETED => 'Удален',
            self::STATUS_INACTIVE => 'Отключен',
            self::STATUS_ACTIVE => 'Включен'
        ];
    }

    /**
     * @return mixed
     */
    public function getStatusLabel()
    {
        return ArrayHelper::getValue(static::getStatuses(), $this->status);
    }

    public static function getRoles() {
        return [
            self::ROLE_ADMIN => 'Админ',
            self::ROLE_MANAGER => 'Менеджер',
            self::ROLE_DIRECTOR => 'Директор'
        ];
    }

    /**
     * @return mixed
     */
    public function getRoleLabel()
    {
        return ArrayHelper::getValue(static::getRoles(), $this->status);
    }

    public static function getCities()
    {
        return [
            self::CITY_NURSULTAN => 'Нур-султан',
            self::CITY_ALMATY => 'Алматы',
            self::CITY_SHYMKENT => 'Шымкент',
            self::CITY_KARAGANDA => 'Караганда',
            self::CITY_KYZYLORDA => 'Кызылорда',
            self::CITY_TARAZ => 'Тараз',
            self::CITY_AKTAU => 'Актау',
            self::CITY_ATYRAU => 'Атырау',
            self::CITY_AKTOBE => 'Актобе',
            self::CITY_USKAMAN => 'Уск-Каменагорск',
            self::CITY_SEMEY => 'Семей',
            self::CITY_KUSTANAY => 'Кустанай',
            self::CITY_PAVLODAR => 'Павлодар',
            self::CITY_PETROPAVL => 'Петропавл',
            self::CITY_TALDYKORGAN => 'Талдыкорган',
        ];
    }

    public function getCommentatorAvatar()
    {
        return $this->avatar_url ? $this->avatar_url : 'default-user.png';
    }

    public function getCommentatorName()
    {
        return $this->full_name;
    }

    public function getCommentatorUrl()
    {
        return ['/profile', 'id' => $this->id]; // or false, if user does not have a public page
    }
}
