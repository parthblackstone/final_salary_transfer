<?php

/* @var $this yii\web\View */

$this->title = 'Our Mission';
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
    					<li class="active"><?=$this->title;?></li>
    				</ol>
    			</div>
    		</div>
    	</div>
    </div>

<!-- Content -->
    <div id="content">
    <section>

    		<div class="container">		
    			<div class="row">
    				<div class="col-lg-8 col-lg-push-2">
    					<h3>Countdown</h3>
    					<div class="countdown mt-70 mb-80" data-date="2017/03/01" data-labels="['weeks','days']"><span class="time">00:00<span>:00</span></span></div>
    				</div>
    			</div>
    		</div>

    	</section>
</div>