<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;
use yii\helpers\VarDumper;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $full_name;
    public $address;
    public $email;
    public $password;
    public $password_repeat;
    public $role;
    public $status;
    public $phone;
    public $workplace;
    public $degree;
    public $speciality;
    public $position;
    public $description;
    public $birthday;
    public $is_subscribed;
    public $city;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Данный логин уже зарегистрирован'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Данный email уже зарегистрирован'],

            [['password', 'password_repeat'], 'required'],
            [['password', 'password_repeat'], 'string', 'min' => 6],
            ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message' => 'Пароли не совпадают'],

            [['workplace', 'phone', 'speciality', 'position', 'city'], 'required'],
            [['full_name', 'address', 'workplace', 'degree', 'phone', 'speciality', 'position', 'description', 'birthday'], 'string'],
            [['status', 'role', 'city'], 'integer'],
            ['is_subscribed', 'boolean']
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'full_name' => 'Ф.И.О',
            'password' => 'Пароль',
            'phone' => 'Телефон',
            'address' => 'Адрес',
            'password_repeat' => 'Подтверждение пароля',
            'workplace' => 'Ученая степень, звание',
            'speciality' => 'Специальность',
            'degree' => 'Должность',
            'description' => 'Трудовая биография и образование',
            'city' => 'Город (вашей учебы/работы)',
            'birthday' => 'Дата рождения',
            'position' => 'Должность',
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();
        $user->full_name = $this->full_name;
        $user->address = $this->address;
        $user->phone = $this->phone;
        $user->workplace = $this->workplace;
        $user->speciality = $this->speciality;
        $user->degree = $this->degree;
        $user->description = $this->description;
        $user->city = $this->city;
        $user->birthday = $this->birthday;
        $user->position = $this->position;
        return $user->save();
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
