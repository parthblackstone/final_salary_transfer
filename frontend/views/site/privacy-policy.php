<?php

$this->title = 'Privacy Policy';

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

    <!-- Section -->
	<section class="section-lg">
		<div class="container text-center">
			<svg class="loader-1 mb-90" width="32px" height="32px" viewBox="0 0 32 32"><circle class="circle-1" fill="none" stroke-width="2" stroke-linecap="round" cx="16" cy="16" r="15"></circle><circle class="circle-2" fill="none" stroke-width="2" stroke-linecap="round" cx="16" cy="16" r="15"></circle></svg>
			<h1 class="mb-10">Cooming soon...</h1>
			<p class="lead mb-40">At the moment we are working on this page - it will be available soon!</p>
            <a href="<?=Yii::$app->homeUrl?>" class="btn btn-default btn-sm"><i class="i-before ti-angle-left"></i>Go to the Home</a>
		</div>
	</section>

</div>
<!-- Content / End -->