<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Calculators';
?>
<!-- Content -->
 <div id="content">

      <section id="intro" class="section-image-edge right h-md bg-primary-gradient dark" data-local-scroll="">

            <div class="bg-image bg-multiply" style="background-image: url('themes/img/photos/accountancy_bg01.jpg';);"><?php echo Html::img('@web/themes/img/photos/accountancy_bg01.jpg',['alt'=>'accountancy','style'=>"display:none;"]) ?></div>
			<?php /*
            <div class="image bottom col-md-6 col-md-push-6 animated hidden-xs hidden-sm fadeInUp visible" data-animation="fadeInUp">
                <?php echo Html::img('@web/themes/img/photos/accountancy_photo01.jpg',['alt'=>'accountancy']) ?>
            </div>
			*/ ?>
            <div class="container v-center">
                <div class="row">
                    <div class="col-lg-8 col-lg-push-2">
                        <div class="layer layer-fadeInLeft"><h1 class="text-xl mb-0"><!-- <span class="text-primary">Life</span>--> Calculators</h1></div>
                        <!-- <div class="layer layer-fadeInRight"><p class="lead text-muted">Protect yourself and your family in case your disease</p></div>-->
                    </div>
                </div>
            </div>
            
        </section>

        <!-- Section -->
        <section id="services" class="cover protrude pull-up-60 text-center">
            
            <div class="container text-center">
			<div class="masonry row" style="position: relative; height: 496.667px;">
				<div class="masonry-sizer col-md-4 col-sm-6 col-xs-12"></div>
				<div class="masonry-item webdesign col-md-4 col-sm-6 col-xs-12" style="position: absolute; left: 0%; top: 0px;">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<div class="hover">
								<?= Html::a('Read More', ['calculator/legacy-planning-calculator'], ['class' => 'btn btn-primary btn-sm','data-title'=>'Image Title']) ?>
							</div>
							<?= Html::a(Html::img('@web/themes/img/cases/case01.jpg',['alt'=>'case']), ['calculator/legacy-planning-calculator'], ['data-lightbox'=>'project3a','data-title'=>"Image Title"]) ?>
						</div>
						<div class="title">
							<?= Html::a('<h5 class="mb-0">Legacy Planning Calculator</h5>', ['calculator/legacy-planning-calculator'], ['data-title'=>"Image Title"]) ?>
						</div>
					</div>
				</div>
				<div class="masonry-item webdesign col-md-4 col-sm-6 col-xs-12" style="position: absolute; left: 33.3333%; top: 0px;">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<div class="hover">
								<?= Html::a('Read More', 'javascript:void(0);', ['class'=>"btn btn-primary btn-sm",'data-title'=>"Image Title"]) ?>
							</div>
							<?= Html::a(Html::img('@web/themes/img/cases/case02.jpg',['alt'=>'case']), 'javascript:void(0);', ['data-lightbox'=>"project3a",'data-title'=>"Image Title"]) ?>
						</div>
						<div class="title">
							<?= Html::a('<h5 class="mb-0">Income Drawdown Calculator</h5>', 'javascript:void(0);', ['data-title'=>"Image Title"]) ?>
						</div>
					</div>
				</div>
				<div class="masonry-item webdesign col-md-4 col-sm-6 col-xs-12" style="position: absolute; left: 66.6667%; top: 0px;">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<div class="hover">
								<?= Html::a('Read More', 'javascript:void(0);', ['class'=>"btn btn-primary btn-sm",'data-title'=>"Image Title"]) ?>
							</div>
							<?= Html::a(Html::img('@web/themes/img/cases/case03.jpg',['alt'=>'case']), 'javascript:void(0);', ['data-lightbox'=>"project3a",'data-title'=>"Image Title"]) ?>
						</div>
						<div class="title">
							<?= Html::a('<h5 class="mb-0">Tax Efficient Income Withdrwal Calculator</h5>', 'javascript:void(0);', ['data-title'=>"Image Title"]) ?>
						</div>
					</div>
				</div>
			</div>
		</div>

        </section>
</div>
    <!-- Content / End -->