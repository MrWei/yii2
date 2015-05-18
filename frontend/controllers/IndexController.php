<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class IndexController extends Controller
{
	public function actionSay($message = 'Hello')
    {
        return $this->render('say', array('message' => $message));
    }
}
