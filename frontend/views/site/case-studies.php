<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Case Studies';
?>
<!-- Page Title -->
<div id="page-title" class="page-title page-title-1 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><?=$this->title;?></h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><?= Html::a('Home Page', Yii::$app->homeUrl) ?></li>
					<li class="active"><?=$this->title;?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Page Title / End -->

<div id="content">
        
        <!-- Section -->
    	<section>
    		<div class="container">

    			<nav class="text-center">
                    <ul class="nav nav-pills filter-isotope mb-50 text-center" data-filter-list="#works-list">
                        <li class="active"><a href="#" data-filter="*"><i class="pe-7s-folder"></i>All</a></li>
                        <li><?= Html::a('<i class="pe-7s-graph1"></i>Investments', '#', ['data-filter'=>'.filter-investments']) ?></li>
						<li><?= Html::a('<i class="pe-7s-comment"></i>Finance Advising', '#', ['data-filter'=>'.filter-financeAdvising']) ?></li>
                        <li><?= Html::a('<i class="pe-7s-like"></i>Insurance', '#', ['data-filter'=>'.filter-insurance']) ?></li>
                    </ul>         
                </nav>

    		 	<div id="works-list" class="masonry row" style="position: relative; height: 986.134px;">
    				<div class="masonry-sizer col-md-4 col-sm-6 col-xs-12"></div>
    				<div class="masonry-item filter-investments col-md-4 col-sm-6 col-xs-12" style="position: absolute; left: 0%; top: 0px;">
    					<!-- Image -->
    					<div class="image-box image-hover text-center">
    						<?= Html::tag('div', Html::a(Html::img('@web/themes/img/cases/case01.jpg',['alt'=>'case']), 'javascript:void(0);', ['data-lightbox'=>'gallery', 'data-title'=>"Image Title"]), ['class'=>'image']);?>
    						<?= Html::tag('div', Html::a('<h6 class="mb-0">Navigation App</h6><span class="text-muted">Investments</span>', 'javascript:void(0);'), ['class'=>'title']);?>
    					</div>
    				</div>
    				<div class="masonry-item filter-insurance col-md-4 col-sm-6 col-xs-12" style="position: absolute; left: 33.3333%; top: 0px;">
    					<!-- Image -->
    					<div class="image-box image-hover text-center">
    						<?= Html::tag('div', Html::a(Html::img('@web/themes/img/cases/case04.jpg',['alt'=>'case']), 'javascript:void(0);', ['data-lightbox'=>'gallery', 'data-title'=>"Image Title"]), ['class'=>'image']);?>
    						<?= Html::tag('div', Html::a('<h6 class="mb-0">Family Disease</h6><span class="text-muted">Insurance</span>', 'javascript:void(0);'), ['class'=>'title']);?>
    					</div>
    				</div>
    				<div class="masonry-item filter-investments col-md-4 col-sm-6 col-xs-12" style="position: absolute; left: 66.6667%; top: 0px;">
    					<!-- Image -->
    					<div class="image-box image-hover text-center">
    						<?= Html::tag('div', Html::a(Html::img('@web/themes/img/cases/case02.jpg',['alt'=>'case']), 'javascript:void(0);', ['data-lightbox'=>'gallery', 'data-title'=>"Image Title"]), ['class'=>'image']);?>
    						<?= Html::tag('div', Html::a('<h6 class="mb-0">Games Service</h6><span class="text-muted">Investments</span>', 'javascript:void(0);'), ['class'=>'title']);?>
    					</div>
    				</div>
    				<div class="masonry-item filter-insurance col-md-4 col-sm-6 col-xs-12" style="position: absolute; left: 0%; top: 493px;">
    					<!-- Image -->
    					<div class="image-box image-hover text-center">
    						<?= Html::tag('div', Html::a(Html::img('@web/themes/img/cases/case05.jpg',['alt'=>'case']), 'javascript:void(0);', ['data-lightbox'=>'gallery', 'data-title'=>"Image Title"]), ['class'=>'image']);?>
    						<?= Html::tag('div', Html::a("<h6 class='mb-0'>Ambers's Life</h6><span class='text-muted'>Insurance</span>", 'javascript:void(0);'), ['class'=>'title']);?>
    					</div>
    				</div>
    				<div class="masonry-item filter-investments col-md-4 col-sm-6 col-xs-12" style="position: absolute; left: 33.3333%; top: 493px;">
    					<!-- Image -->
    					<div class="image-box image-hover text-center">
    						<?= Html::tag('div', Html::a(Html::img('@web/themes/img/cases/case03.jpg',['alt'=>'case']), 'javascript:void(0);', ['data-lightbox'=>'gallery', 'data-title'=>"Image Title"]), ['class'=>'image']);?>
    						<?= Html::tag('div', Html::a("<h6 class='mb-0'>Music App</h6><span class='text-muted'>Investments</span>", 'javascript:void(0);'), ['class'=>'title']);?>
    					</div>
    				</div>
    				<div class="masonry-item filter-financeAdvising col-md-4 col-sm-6 col-xs-12" style="position: absolute; left: 66.6667%; top: 493px;">
    					<!-- Image -->
    					<div class="image-box image-hover text-center">
    						<?= Html::tag('div', Html::a(Html::img('@web/themes/img/cases/case06.jpg',['alt'=>'case']), 'javascript:void(0);', ['data-lightbox'=>'gallery', 'data-title'=>"Image Title"]), ['class'=>'image']);?>
    						<?= Html::tag('div', Html::a("<h6 class='mb-0'>Music Life</h6><span class='text-muted'>Finance Advising</span>", 'javascript:void(0);'), ['class'=>'title']);?>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>

    </div>