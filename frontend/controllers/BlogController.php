<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

/**
 * Blog controller
 */
class BlogController extends Controller {
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['logout', 'signup'],
				'rules' => [
					[
						'actions' => ['signup'],
						'allow' => true,
						'roles' => ['?'],
					],
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

	/**
	 * @inheritdoc
	 */
	public function actions() {
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

    public function actionIndex(){
        // gET aLL Blog Posts
        $blogPosts = Yii::$app->blog->getPosts([
                    'post_status' => 'publish',
                ], ['post_title', 'post_thumbnail','post_date']);
        
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $blogPosts,
            'pagination' => ['defaultPageSize' => 20],
        ]);

        return $this->render('index',['dataProvider'=>$dataProvider]);
    }

    public function actionSinglePost($id){
        // gET aLL Blog Posts
        $blogPost = Yii::$app->blog->getPost($id, ['post_title', 'post_thumbnail','post_date','post_content']);
        
        return $this->render('single-post',['blogPost'=>$blogPost]);
    }
}
