
<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Legacy Planning Calculator';

$this->registerJsFile('@web/themes/js/canvasjs.min.js', ['position' => \yii\web\View::POS_END]);

?>
<div id="page-title" class="page-title page-title-1 bg-grey">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<h1></i><?=$this->title;?></h1>
    			</div>
    			<div class="col-md-6">
    				<ol class="breadcrumb">
    					<li><a href="<?=Yii::$app->homeUrl?>">Home Page</a></li>
                        <li><a href="<?=Yii::$app->homeUrl. 'site/calculators'?>">Calculators</a></li>
                        <li class="active"><?=$this->title;?></li>
    				</ol>
    			</div>
    		</div>
    	</div>
    </div>

<!-- Content -->
<div id="content">
    <section class="section-image-edge section-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 content">
                    <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'calculate-income-form','options'=>['class'=> 'calculate-income-form validate-form','data-message-error'=>'Opps... Something went wrong - please try again later','data-message-success'=>'Thank you form your message! We will answer within 24 hours.']]); ?>
                            <!-- Form Item -->
                            <div class="form-group">
                                <label>Current Age</label>
                                <div class="input-group">
                                    <?= $form->field($model, 'current_age')->textInput(['autofocus' => true,'type' => 'number','class'=> 'form-control input-lg','value'=>'55','min'=>"0", 'max'=>"120",'required'=>'required'])->label(false) ?>
                                </div>
                                <!--<div id="moneySlider" class="form-slider" data-input="#moneyAmount" data-min="200" data-max="10000" data-value="1000"></div>-->
                            </div>
                            <!-- Form Item -->
                            <div class="form-group">
                                <label>Cash Equivalent Transfer Value (CETV)</label>
                                <div class="input-group">
                                    <div class="input-group-addon">&#163;</div>
                                    <?= $form->field($model, 'cetv')->textInput(['type' => 'number','class'=> 'form-control input-lg','required'=>'required'])->label(false) ?>
                                    <!--<div class="input-group-addon">months</div>-->
                                </div>
                                <!--<div id="monthSlider" class="form-slider" data-input="#monthNumber" data-min="6" data-max="96" data-value="24"></div>-->
                            </div>
                            <!-- Form Item -->
                            <div class="form-group">
                                <label>Expected Growth Rate</label>
                                <div class="input-group">
                                    <?= $form->field($model, 'expected_growth_rate')->textInput(['type' => 'number','class'=> 'form-control input-lg','value'=>'2','min'=>"1", 'max'=>"8",'required'=>'required'])->label(false) ?>
                                    <!--<div class="input-group-addon">%</div>-->
                                </div>
                                <!-- <div id="egrSlider" class="form-slider" data-input="#egrSlider" data-min="1" data-max="8" data-value="2"></div>-->
                            </div>
                            <!-- Form Item -->
                            <div class="form-group">
                                <label>Retirement Age</label>
                                <div class="input-group">
                                    <?= $form->field($model, 'retirement_age')->textInput(['type' => 'number','class'=> 'form-control input-lg','value'=>'55','min'=>"55", 'max'=>"100",'required'=>'required'])->label(false) ?>
                                    <!--<div class="input-group-addon">months</div>-->
                                </div>
                                <!--<div id="monthSlider" class="form-slider" data-input="#monthNumber" data-min="6" data-max="96" data-value="24"></div>-->
                            </div>
                            <!-- Form Item -->
                            <div class="form-group displaynone projected_fund_at_retirement">
                                <label>Projected Fund at Retirement</label>
                                <span class="form-total">&#163;<span id="projected_fund_at_retirement" >0</span></span>
                            </div>
                            <div class="form-group displaynone potential_annual_gross_drawdown_income">
                                <label>Potential Annual Gross Drawdown Income</label>
                                <span class="form-total">&#163;<span id="potential_annual_gross_drawdown_income" >0</span><i class="i-after ti-pencil cursor-pointer edit_annual_gross_drawdown_income"></i></span>
                            </div>
                            <!-- Form Item -->
                            <div class="form-group displaynone calculateincome-annual_gross_drawdown_income">
                                <label>Potential Annual Gross Drawdown Income</label>
                                <div class="input-group">
                                    <?= $form->field($model, 'annual_gross_drawdown_income')->textInput(['type' => 'number','class'=> 'form-control input-lg','value'=>'0'])->label(false) ?>
                                    <!--<div class="input-group-addon">months</div>-->
                                </div>
                                <!--<div id="monthSlider" class="form-slider" data-input="#monthNumber" data-min="6" data-max="96" data-value="24"></div>-->
                            </div>
                            <div class="form-group form-submit">
                                <?php $sbumitText = 'Submit <i class="i-after ti-angle-right"></i>'; ?>
                                <?= Html::submitButton($sbumitText, ['class' => 'btn-submit', 'name' => 'calculate-income-button']) ?>
                            </div>
                        <?php \yii\widgets\ActiveForm::end(); ?>
                </div>
                <div  class="col-lg-7 col-md-7 content">
                    <div id="chartContainer" style="width: 100%; min-height: 650px;"></div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Section -->
</div>