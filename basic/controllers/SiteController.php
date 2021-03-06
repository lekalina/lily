<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

//'<pre>'.print_r($images,true).'</pre>'

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionGallery()
    {
        $images = \app\models\Lily_images::find()->all();
        return $this->render('gallery',array('images'=>$images));
    }
    
    public function actionDetail()
    {
        return $this->render('detail');
    }
    
    public function actionVideo()
    {
        return $this->render('video');
    }
    
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionGame()
    {
        $images = \app\models\Lily_images::find()->all();
        return $this->render('game',array('images'=>$images));
    }
    
    public function actionAndroidgetimages()
    {
        //die("wtf");
        $out = Array();
        $out['response'] = "init";
        $out['message'] = "";
        $images = \app\models\Lily_images::find()->all();
        if($images){
            $out['response'] = "success";
            foreach($images as $img){
                $out["images"][] = $img['image_url'];
            }
        }else{
            $out['response'] = "error";
            $out['message'] = "there are no images available";
        }
        header('Content-Type: application/json');
        return json_encode($out);
    }
}
