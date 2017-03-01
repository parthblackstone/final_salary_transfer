<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Our Financial Advisors';
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

    <section id="about" class="text-center">

            <div class="container">
                
                <div class="row">
                    <div class="col-sm-4">
                        <!-- Member -->
                        <div class="member member-1">
                            <?php echo Html::img('@web/themes/img/members/member01_v.jpg',['alt'=>'members']) ?>
                            <div class="member-content">
                                <a href="<?=Yii::$app->homeUrl . 'site/about-me'?>">
                                    <h5>Maria Kovalska</h5>
                                    <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- Member -->
                        <div class="member member-1">
                            <?php echo Html::img('@web/themes/img/members/member02_v.jpg',['alt'=>'members']) ?>
                            <div class="member-content">
                                <a href="<?=Yii::$app->homeUrl . 'site/about-me'?>">
                                    <h5>Thomas Novak</h5>
                                    <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- Member -->
                        <div class="member member-1">
                            <?php echo Html::img('@web/themes/img/members/member03_v.jpg',['alt'=>'members']) ?>
                            <div class="member-content">
                                <a href="<?=Yii::$app->homeUrl . 'site/about-me'?>">
                                    <h5>George Majka</h5>
                                    <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
</div>