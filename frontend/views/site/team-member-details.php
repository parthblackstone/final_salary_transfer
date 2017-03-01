<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
use yii\helpers\Html;

$this->title = 'About Me';
$this->params['breadcrumbs'][] = $this->title;
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
                        <li><a href="<?=Yii::$app->homeUrl . 'site/who-we-are'?>">Who We Are</a></li>
                        <li><a href="<?=Yii::$app->homeUrl . 'site/our-team'?>">Our Team</a></li>
    					<li class="active"><?=$this->title;?></li>
    				</ol>
    			</div>
    		</div>
    	</div>
    </div>


<!-- Content -->
    <div id="content">

        <!-- Section / Double -->
        <section class="section-double left">
            <div class="image col-md-6">
                <div class="bg-image"><?php echo Html::img('@web/themes/photos/member_photo01.jpg',['alt'=>'member']) ?></div>
            </div>
            <div class="content col-md-6">
                <h1 class="mb-0">Mike Kowalski</h1>
                <p class="lead text-muted mb-50">Investments Expert</p>
                <div class="row">
                    <div class="col-sm-4">
                        <dl class="description-2">
                            <dt>Speciality</dt>
                            <dd>Front-End Development</dd>
                            <dt>Years experience</dt>
                            <dd>6+</dd>
                        </dl>
                    </div>
                    <div class="col-sm-4">
                        <dl class="description-2">
                            <dt>Born date</dt>
                            <dd>1985</dd>
                            <dt>Current company</dt>
                            <dd>Envato</dd>
                        </dl>
                    </div>
                    <div class="col-sm-4">
                        <dl class="description-2">
                            <dt>Previous Company</dt>
                            <dd>Google Inc.</dd>
                        </dl>
                    </div>
                </div>
                <a href="#" class="btn btn-primary btn-sm">Download CV</a>
            </div>
        </section>

        <!-- Section / Double -->
        <section class="section-double right">
            <div class="image col-md-6">
                <div class="bg-image"><?php echo Html::img('@web/themes/photos/accountancy_counter01.jpg',['alt'=>'member']) ?></div>
            </div>
            <div class="content col-md-6">
                <h5 class="mb-60">What do I do?</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Feature -->
                        <div class="feature feature-1 animated" data-animation="fadeIn">
                            <span class="icon icon-primary icon-sm"><i class="pe-7s-display1"></i></span>
                            <h6>Financial advising</h6>
                        </div>
                        <!-- Feature -->
                        <div class="feature feature-1 animated" data-animation="fadeIn" data-animation-delay="100">
                            <span class="icon icon-primary icon-sm"><i class="pe-7s-diamond"></i></span>
                            <h6>Stock Investments</h6>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- Feature -->
                        <div class="feature feature-1 animated" data-animation="fadeIn" data-animation-delay="200">
                            <span class="icon icon-primary icon-sm"><i class="pe-7s-like"></i></span>
                            <h6>Health Insurance</h6>
                        </div>
                        <!-- Feature -->
                        <div class="feature feature-1 animated" data-animation="fadeIn" data-animation-delay="300">
                            <span class="icon icon-primary icon-sm"><i class="pe-7s-graph"></i></span>
                            <h6>Forex Investments</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section / Double -->
        <section class="section-double left">
            <div class="image col-md-6">
                <div class="bg-image"><?php echo Html::img('@web/themes/photos/member_photo03.jpg',['alt'=>'member']) ?></div>
            </div>
            <div class="content col-md-6">
                <h5 class="mb-60">My Skills</h5>
                <div class="mb-30">
                    <div class="progress progress-2">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                    </div>
                    <h6>Forex Investments</h6>
                </div>
                <div class="mb-30">
                    <div class="progress progress-2">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                    </div>
                    <h6>Stock Investments</h6>
                </div>
                <div class="mb-30">
                    <div class="progress progress-2">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">70%</div>
                    </div>
                    <h6>Finance Advising</h6>
                </div>
            </div>
        </section>

        <!-- Section / Double -->
        <section class="section-double right">
            <div class="image col-md-6">
                <div class="bg-image"><?php echo Html::img('@web/themes/photos/member_photo04.jpg',['alt'=>'member']) ?></div>
            </div>
            <div class="content col-md-6">
                <h5 class="mb-60">My Experience</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="event animated" data-animation="fadeIn">
                            <div class="date">02.2008 - 11.2012</div>
                            <h5 class="mb-0">Investments Manager</h5>
                            <span class="text-muted">NLU Warsaw</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="event animated" data-animation="fadeIn" data-animation-delay="100">
                            <div class="date">02.2008 - 11.2012</div>
                            <h5 class="mb-0">Investments Advisior</h5>
                            <span class="text-muted">Google Inc.</span>
                        </div>
                    </div>
                </div>
                <hr class="sep-line mb-40 hidden-xs">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="event animated" data-animation="fadeIn" data-animation-delay="200">
                            <div class="date">02.2008 - 11.2012</div>
                            <h5 class="mb-0">Investments Director</h5>
                            <span class="text-muted">WSB</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="event animated" data-animation="fadeIn" data-animation-delay="300">
                            <div class="date">02.2008 - 11.2012</div>
                            <h5 class="mb-0">CEO / Founder</h5>
                            <span class="text-muted">Zysk Inc.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- Content / End -->