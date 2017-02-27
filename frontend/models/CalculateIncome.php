<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class CalculateIncome extends Model
{
    public $current_age;
    public $retirement_age;
    public $cetv;
    public $expected_growth_rate;
    public $annual_gross_drawdown_income;
    public $years_since_leaving;
    public $pension_income_at_date_of_leaving;
    


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['current_age', 'retirement_age', 'cetv', 'expected_growth_rate'], 'required'],
        ];
    }

    public function getExpectedGrowthRateDropdown(){
        return ['2.25' => Yii::t('app', '2.25%  (Low to Medium Risk)'), 
                '2.85' => Yii::t('app', '2.85%  (Medium Risk)'), 
                '3.50' => Yii::t('app', '3.50%  (Medium to High Risk)'), 
                '5' => Yii::t('app', '5.00%  (High Risk)')
            ];
    }
}
