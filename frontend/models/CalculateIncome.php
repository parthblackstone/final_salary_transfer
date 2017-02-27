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
    


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['current_age', 'retirement_age', 'cetv', 'expected_growth_rate'], 'required'],
        ];
    }
}
