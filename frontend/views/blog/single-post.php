<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = $blogPost['post_title'];
?>
<!-- Page Title -->
<div id="page-title" class="page-title page-title-1 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?=Yii::$app->homeUrl?>">Home Page</a></li>
                    <li><a href="<?=Yii::$app->homeUrl. 'blog/index'?>">Blogs</a></li>
                    <li class="active"><?=$this->title;?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Page Title / End -->
    <!-- Content -->
    <div id="content">

        <!-- Section -->
    	<section>

    		<div class="container">
    			<div class="row">

    				<!-- Content -->
    				<div class="content col-lg-10 col-md-11">
    					<!-- Post -->
    					<div class="post single">
                            <h1 class="text-center"><?= $blogPost['post_title']?></h1>
                            <ul class="post-meta text-center">
                                <li><span>Added: </span><?= date('d F, Y', $blogPost['post_date']->timestamp)?></li>
                            </ul>
    						<div class="post-image">
    							<?= Html::img($blogPost['post_thumbnail']['link'],['alt'=>$blogPost['post_thumbnail']['title']])?>
    						</div>
    						<div class="post-content">
    							<?= $blogPost['post_content']?>
    						</div>
    						<hr class="sep-line mt-60 mb-60">
                            <?php if(count($getComments)> 0){?>
    						<div class="post-comments post-module">
    							<h6 class="text-muted">Comments <span class="badge bg-danger"><?= count($getComments) ?></span></h6>
    							<div class="content">
    								<ul class="comments">
                                        <?php foreach ($getComments as $key => $getComment) {
                                                echo "<li>";
                                                echo Html::tag('div', Html::img('@web/themes/img/default-user.png'), ['class'=>'avatar']);
                                                echo Html::tag('div', '<span class="details">'.$getComment['author'] .' on '. date('F d', $getComment['date_created_gmt']->timestamp).',</span></br>'.$getComment['content'], ['class'=>'content']);
                                                echo "</li>";
                                        }?>
    								</ul>
    							</div>
    						</div>
                            <?php } ?>
    						<hr class="sep-line mt-60 mb-60">
    						<div class="post-add-comment post-module">
    							<h6 class="text-muted">Write a comment</h6>
    							<div class="content">
    								<?php $form = \yii\widgets\ActiveForm::begin(['id' => 'add-comment','options'=>['class'=> 'validate-form add-comment-form','data-message-error'=>'Opps... Something went wrong - please try again later']]); ?>
                                        <input id="postblogcomment-post_id" name="PostBlogComment[post_id]" value=<?=$blogPost['post_id']?> type="hidden">
										<div class="form-group">
											<?= $form->field($model, 'name')->textInput(['autofocus' => true,'class'=> 'form-control','placeholder'=>'Name','required'=>'required'])->label(false) ?>
                                        </div>
										<div class="form-group">
											<?= $form->field($model, 'email')->textInput(['class'=> 'form-control','placeholder'=>'E-mail Address','required'=>'required'])->label(false) ?>
										</div>
    									<div class="form-group">
    										<?= $form->field($model, 'comment')->textarea(['class'=> 'form-control','placeholder'=>'Add Comment','rows'=>'4','required'=>'required'])->label(false) ?>
    									</div>
                                        <!-- <div class="form-group">
                                        <?php //$form->field($model, 'verifyCode')->widget(Captcha::className(),['class'=> 'form-control','required'=>'required']) ?>
                                        </div> -->

    									<?php $sbumitText = 'Send a comment'; ?>
                                        <?= Html::submitButton($sbumitText, ['class' => 'btn-submit', 'name' => 'comment-button']) ?>
    								<?php \yii\widgets\ActiveForm::end(); ?>
    							</div>
    						</div>
    					</div>
    				</div>

    			</div>
    		</div>

    	</section>

    </div>
    <!-- Content / End -->
    