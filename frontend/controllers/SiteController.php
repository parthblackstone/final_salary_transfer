<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use app\models\FaqPage;
use app\models\ContactUs;
use frontend\models\Pages;
/**
 * Site controller
 */
class SiteController extends Controller {
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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Displays Who we are .
     *
     * @return mixed
     */
    public function actionWhoWeAre()
    {
        return $this->render('who-we-are');
    }

    /**
     * Displays About Company .
     *
     * @return mixed
     */
    public function actionAboutUs()
    {
        return $this->render('about-company');
    }

    /**
	 * Displays About Me page.
	 *
	 * @return mixed
	 */
	public function actionAboutMe() {
		return $this->render('team-member-details');
	}

    /**
	 * Displays Our Team page.
	 *
	 * @return mixed
	 */
	public function actionOurTeam() {
		return $this->render('our-team');
	}

    /**
	 * Displays Why Us page.
	 *
	 * @return mixed
	 */
	public function actionWhyUs() {

        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => 'Description of the page...'
        ]);
		return $this->render('why-us');
	}

    /**
	 * Displays Case Studies page.
	 *
	 * @return mixed
	 */
	public function actionCaseStudies() {
		return $this->render('case-studies');
	}

    /**
	 * Displays FAQ page.
	 *
	 * @return mixed
	 */
	public function actionFaq() {
        $faqDatas = FaqPage::find()->where(['status'=>1])->orderBy('position')->all();
        
		return $this->render('faq',['faqDatas' => $faqDatas]);
	}

    /**
	 * Displays Privacy Policy page.
	 *
	 * @return mixed
	 */
	public function actionPrivacyPolicy() {
		return $this->render('privacy-policy');
	}

    /**
	 * Displays News page.
	 *
	 * @return mixed
	 */
	public function actionNews() {
		return $this->render('news');
	}
    
    /**
	 * Displays Our Mission page.
	 *
	 * @return mixed
	 */
	public function actionOurMission() {
		return $this->render('our-mission');
	}
    
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact($office)
    {
        if(isset($office) && !empty($office) && ($office == 'London'||$office == 'Essex')){
            $model = new ContactUs();
            return $this->render('contact', [
                'model' => $model, 'office' => $office
            ]);
        }else{
            return $this->goHome();
        }
        
    }

    /**
     * Displays contact Ajax page.
     *
     * @return mixed
     */
    public function actionContactAjax()
    {
        $model = new ContactUs();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            return 'success';
        } else {
            return 'false';
        }
    }

    
    /**
     * Displays Calculators page.
     *
     * @return mixed
     */
    public function actionCalculators()
    {
        return $this->render('calculators');
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionPages($page){

        
        if(isset($page) && !empty($page)){

            $pageContent = Pages::findOne(['is_active'=>1,'page_sort_code'=> $page]);
            if($pageContent){
               $pageContent['content'] = str_replace(["{case-study}","{legacy-planning-calculator}"],[Yii::$app->homeUrl . 'site/pages/case-study',Yii::$app->homeUrl . 'calculator/legacy-planning-calculator'],$pageContent['content']);
                return $this->render('pages', ['page'=>$pageContent]);
            }else{
                return $this->goHome();    
            }
            
        }else{
            return $this->goHome();
        }
    }

    public function actionFlexibility(){
        return $this->render('flexibility');
    }

    public function actionCaseStudy(){
        return $this->render('case-study');
    }
}

