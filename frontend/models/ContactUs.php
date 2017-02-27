<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact_us".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone_number
 * @property string $post_code
 * @property string $area_interest 
 * @property string $message
 * @property string $created_at
 */
class ContactUs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact_us';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone_number', 'post_code'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            [['area_interest', 'message'], 'string'],
            [['created_at','message'], 'safe'],
            [['name', 'email'], 'string', 'max' => 255],
            [['phone_number'], 'string', 'max' => 20],
            [['post_code'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'post_code' => Yii::t('app', 'Post Code'),
            'message' => Yii::t('app', 'Message'),
            'area_interest' => Yii::t('app', 'Area Interest'), 
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    public function getAreaInterestDropdown() {
		return ['Legacy Planning' => Yii::t('app', 'Legacy Planning'), 'Control On Income' => Yii::t('app', 'Control On Income'), 'Control On Investments' => Yii::t('app', 'Control On Investments'), 'Tax planning' => Yii::t('app', 'Tax planning')];
    }
}
