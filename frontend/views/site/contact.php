<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
#use yii\captcha\Captcha;

$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php /*
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
*/ ?>
<!-- Page Title -->
    <div id="page-title" class="page-title page-title-1 bg-grey">
        <!-- BG Map -->
        <!-- <div id="google-map" class="bg-map light-overlay" data-style="apple" data-latitude="51.514037" data-longitude="-0.079286" data-icon ="<?=Yii::$app->homeUrl . 'themes/img/location-pin.png'?>" ></div>-->

        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><?=$this->title;?></h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?=Yii::$app->homeUrl?>">Home Page</a></li>
                    <li class="active"><?=$this->title;?></li>
                </ol>
            </div>
        </div>
    </div>
    </div>
<!-- Page Title / End -->
 <!-- Content -->
    <div id="content">

    <?php 
        $userLocations = '';
        if($office == 'London'){
            $userLocations = [
                    [
                        'location' => [
                            'address' => '31 Bury Street Bury House London EC3A 5AR',
                            'country' => 'United Kingdom',
                        ],
                        'htmlContent' => '<h3>31 Bury Street | Bury House | London | EC3A 5AR</h3>',
                    ],
                ];
        }else if($office == 'Essex'){
            $userLocations = [
                        [
                            'location' => [
                                'address' => 'Suite 2 Courtyard Offices Braxted Park Braxted Park Road Great Braxted Essex CM8 3GA',
                                'country' => 'United Kingdom',
                            ],
                            'htmlContent' => '<h3>Suite 2 Courtyard Offices | Braxted Park | Braxted Park Road | Great Braxted | Essex | CM8 3GA</h3>',
                        ],
                    ];
        }
        echo yii2mod\google\maps\markers\GoogleMaps::widget([
                'userLocations' => $userLocations,
                'googleMapsUrlOptions' => [
                    'key' => 'AIzaSyAQFjxcGUSRBMBRL6YXnXH6SrDUZvx9gBs',
                    'language' => 'en',
                    'version' => '3.1.18',
                ],
                'googleMapsOptions' => [
                    'mapTypeId' => 'roadmap', /*roadmap*/
                    'tilt' => 45,
                    'zoom' => 18,
                ],
            ]);
        ?>
                   
    <section>
            <div class="container">        
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?=Yii::$app->homeUrl?>"><h4>Final Salary Transfer</h4></a>
                        <h6 class="text-muted">Address:</h6>
                        <?php if($office == 'London'){?>
                        <address class="mb-5 text-primary">
                            Bury House<br>31 Bury Street<br>London<br>EC3A 5AR<br><br>
                        </address>
                        <?php }else if($office == 'Essex'){?>
                        <address class="mb-5 text-primary">
                            Suite 2 Courtyard Offices<br>Braxted Park | Braxted Park Road<br>Great Braxted<br>Essex | CM8 3GA<br><br>
                        </address>
                        <?php }?>
                        <h6 class="text-muted">Phone:</h6>
                        <a href="tel:02033761444" class="text-primary">020 3376 1444</a><br><br>
                        <h6 class="text-muted">E-mail:</h6>
                        <a href="mailto:info@blackstonemoregate.com" class="text-primary">info@blackstonemoregate.com</a><br>
                    </div>
                    <div class="col-lg-8 col-lg-push-1 col-md-59"><!-- col-lg-8 col-lg-push-1-->
                        <h3><em>Talk</em> to Us!</h3>
                        <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'contact-form','options'=>['class'=> 'contact-form validate-form','data-message-error'=>'Opps... Something went wrong - please try again later','data-message-success'=>'Thank you form your message! We will answer within 24 hours.']]); ?>
                            <div class="form-group">
                                <?= $form->field($model, 'name')->textInput(['autofocus' => true,'class'=> 'form-control','placeholder'=>'Name','required'=>'required'])->label(false) ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'email')->textInput(['class'=> 'form-control','placeholder'=>'E-mail address','required'=>'required'])->label(false) ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'phone_number')->textInput(['class'=> 'form-control','placeholder'=>'Phone Number','required'=>'required'])->label(false) ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'post_code')->textInput(['class'=> 'form-control','placeholder'=>'Post Code','required'=>'required'])->label(false) ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'area_interest')->dropDownList($model->getAreaInterestDropdown(), ['prompt' => 'Area On Interest','class'=> 'form-control','required'=>'required'])->label(false) ?>
                            </div>
                            
                            <div class="form-group">
                                <?= $form->field($model, 'message')->textarea(['class'=> 'form-control','placeholder'=>'Message','rows'=>'4'])->label(false) ?>
                            </div>
                            <div class="form-group">
                                <?php $sbumitText = 'Submit <i class="i-after ti-angle-right"></i>'; ?>
                                <?= Html::submitButton($sbumitText, ['class' => 'btn-submit', 'name' => 'contact-button']) ?>
                            </div>
                         <?php \yii\widgets\ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </section>
</div>
    <!-- Content / End -->