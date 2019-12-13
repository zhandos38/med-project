<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 13.12.2019
 * Time: 22:39
 */

namespace console\controllers;


use Yii;
use yii\console\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        Yii::$app->mailer->compose()
            ->setFrom('postmaster@mg.ksior.kz')
            ->setTo('zhandos_38@mail.ru') // кому отправляем - реальный адрес куда придёт письмо формата asdf @asdf.com
            ->setSubject('Hello from Ksior') // тема письма
            ->setTextBody("Hello you are the best dude") // текст письма без HTML
            ->setHtmlBody("<h1>You are very cool man what i have ever meet</h1>")
            ->send();
    }
}