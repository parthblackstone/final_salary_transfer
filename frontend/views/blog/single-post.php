<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

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
    						<div class="post-comments post-module">
    							<h6 class="text-muted">Comments <span class="badge bg-danger">3</span></h6>
    							<div class="content">
    								<ul class="comments">
    									<li>
    										<div class="avatar"><img src="assets/img/avatars/avatar01.jpg" alt=""></div>
    										<div class="content">
    											<span class="details">Jessica Biel on September 20,  <a href="#" class="text-primary">Reply</a></span>
    											<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
    										</div>
    										<ul>
    											<li>
    												<div class="avatar"><img src="assets/img/avatars/avatar02.jpg" alt=""></div>
    												<div class="content">
    													<span class="details">Jessica Biel on September 20</span>
    													<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus, nec dapibus felis tempus in. Quisque eget elementum sem, cursus tristique orci. Donec velit nisi, auctor ac pharetra in, maximus eu justo.</p>
    												</div>
    											</li>
    										</ul>
    									</li>
    									<li>
    										<div class="avatar"><img src="assets/img/avatars/avatar03.jpg" alt=""></div>
    										<div class="content">
    											<span class="details">Jessica Biel on September 20,  <a href="#" class="text-primary">Reply</a></span>
    											<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
    										</div>
    									</li>
    								</ul>
    							</div>
    						</div>
    						<hr class="sep-line mt-60 mb-60">
    						<div class="post-add-comment post-module">
    							<h6 class="text-muted">Write a comment</h6>
    							<div class="content">
    								<form action="#" id="add-comment" class="validate-form">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Name" required>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="E-mail" required>
										</div>
    									<div class="form-group">
    										<textarea id="comment" cols="30" rows="4" class="form-control" placeholder="Comment" required></textarea>
    									</div>
    									<button class="btn-submit">Send a comment</button>
    								</form>
    							</div>
    						</div>
    					</div>
    				</div>

    			</div>
    		</div>

    	</section>

    </div>
    <!-- Content / End -->