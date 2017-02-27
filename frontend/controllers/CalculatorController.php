<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\CalculateIncome;

/**
 * Site controller
 */
class CalculatorController extends Controller {
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
     * Displays LegacyPlanningCalculator Page.
     *
     * @return mixed
     */
    public function actionLegacyPlanningCalculator()
    {
        $model = new CalculateIncome();
		return $this->render('legacy-planning-calculator', [
			'model' => $model
		]);
	}

	public function actionCalculateIncome(){
		
		$model = new CalculateIncome();

		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
			$request = Yii::$app->request->post();
			$current_age = $retirement_age = $cetv = $expected_growth_rate = 0;
			// Post Data Start
			$current_age = $request['CalculateIncome']['current_age'];
			$retirement_age = $request['CalculateIncome']['retirement_age'];
			$cetv = $request['CalculateIncome']['cetv'];
			$expected_growth_rate = $request['CalculateIncome']['expected_growth_rate'];
			// Post Data End
			$projected_fund_at_retirement = $monthly_interest_rate = $monthly_interest_rate_plus_1 = $months_in_retirement = $years_in_retirement = $projected_potential_gross_pension_at_retirement =  0; // Set Default Value
			$step1 = $step2 = $step3 = $step4 = $step5 = $step6 = 0; // Set Default Value
			$chartArray = []; // Set Default Value
			$life_expectancy = 100; // Set Default Value
			// First calculate Projected Fund at Retirement
			$projected_fund_at_retirement = $cetv * (pow((1 + ($expected_growth_rate / 100)) , ( $retirement_age - $current_age )));

			// Find Monthly Interest Rate
			$monthly_interest_rate = ($expected_growth_rate / 100) / 12;
			// Find Monthly Interest Rate Plus 1
			$monthly_interest_rate_plus_1 = $monthly_interest_rate + 1;
			// Find Years in Retirement
			$years_in_retirement = $life_expectancy - $retirement_age;
			// Find Months in Retirement
			$months_in_retirement = $years_in_retirement * 12;

			// Find Final Calculate functionality With 6 steps

			// Find Step 1 
			$step1 = pow($monthly_interest_rate_plus_1 , $months_in_retirement);

			// Find Step 2
			$step2 = 1 / $step1;

			// Find Step 3 
			$step3 = 1 - $step2;

			// Find Step 4 
			$step4 = $step3 /  $monthly_interest_rate; 

			// Find Step 5 
			$step5 = $projected_fund_at_retirement / $step4;

			// Find Step 6 
			$step6 = $step5 * 12;

			
			

			// Return Array to calculater 
			// Also display final value in GBP format 
			
			$final_array = [
				'projected_fund_at_retirement'=> number_format(round($projected_fund_at_retirement)),
				'potential_annual_gross_drawdown_income'=> round($step6),
				'annual_gross_drawdown_income' => round($step6)
				];

			// check annual_gross_drawdown_income change  
			if($request['CalculateIncome']['annual_gross_drawdown_income'] != 0){
				$step6 = $request['CalculateIncome']['annual_gross_drawdown_income'];
				$final_array['annual_gross_drawdown_income'] = $step6;
			}

			// Find Projected Potential Gross Pension at Retirement
			$projected_potential_gross_pension_at_retirement = 
				$chartArray[] = ['Age', 'Fund Value'];
			for ($i=$retirement_age; $i <= 100 ; $i++) { 

				$chartArray[]= [(int) $i ,round($projected_fund_at_retirement)];
				$projected_fund_at_retirement = $projected_fund_at_retirement - $step6;
				$projected_fund_at_retirement = $projected_fund_at_retirement + ($projected_fund_at_retirement * ($expected_growth_rate / 100));
			}
			
			$final_array['chartArray'] = $chartArray;
			
			return json_encode($final_array);
		}
		else{
			return 'error';
		}
		//exit;
	}
}
