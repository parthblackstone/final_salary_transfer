<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use frontend\models\PostBlogComment;
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
                ], ['post_title', 'post_thumbnail','post_date','post_name']);
        
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $blogPosts,
            'pagination' => ['defaultPageSize' => 20],
        ]);

        return $this->render('index',['dataProvider'=>$dataProvider]);
    }

    public function actionSinglePost($id , $post_name){
        // gET Blog Post Details 
        $blogPost = Yii::$app->blog->getPost($id, ['post_title', 'post_thumbnail','post_date','post_content','post_id']);
        // Get Post Comment 
        $getComments = Yii::$app->blog->getComments(['post_id'=>$id]);
        // Add Comment Model
        
        $model = new PostBlogComment();
        return $this->render('single-post',['blogPost'=>$blogPost,'getComments'=>$getComments, 'model'=>$model]);
    }

    public function actionAddNewComment(){

        $model = new PostBlogComment();

        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $request = Yii::$app->request->post();
            print_r($request);
            // Post Data Start
			$name = $request['PostBlogComment']['name'];
            $email = $request['PostBlogComment']['email'];
            $post_id = $request['PostBlogComment']['post_id'];
            $comment = $request['PostBlogComment']['comment'];
            
            $newCommnet = Yii::$app->blog->newComment($post_id , [ 'content'=> $comment, 'author'=> $name, 'author_url' =>'', 'author_email'=>$email,'logged_in'=>false]);
            if($newCommnet){
                return true;
            }else{
                return false;
            }
        }
    }
}
