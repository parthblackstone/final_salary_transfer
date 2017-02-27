<?php

$this->title = 'FAQ';

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
                    <li class="active">FAQ</li>
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
    				<div class="col-lg-7">
    					<h2 class="mb-50 text-center">What do you <em>want</em> to know?</h2>
    					<!-- Accordion -->
    					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<?php foreach ($faqDatas as $faqDetail): ?>
								<!-- Panel -->
								<div class="panel panel-2">
									<div class="panel-heading" role="tab">
										<h4 class="panel-title">
											<a data-toggle="collapse" href="<?= '#'.$faqDetail->id ?>" aria-expanded="false"><?= $faqDetail->question ?></a>
										</h4>
									</div>
									<div id="<?= $faqDetail->id ?>" class="panel-collapse collapse" role="tabpanel">
										<div class="panel-body">
											<?= ($faqDetail->answer)? $faqDetail->answer : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' ?>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
    					</div>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-center">
                            <!-- Spread Items -->
                            <div class="spread-items mb-10">
                                <span class="icon icon-default"><i class="pe-7s-folder"></i></span>
                                <span class="icon icon-default icon-xl"><i class="pe-7s-comment"></i></span>
                                <span class="icon icon-default"><i class="pe-7s-note2"></i></span>
                            </div>
                            <h3 class="mb-50">Did not <em>find</em> your answer?</h3>
                            <a href="<?=Yii::$app->homeUrl . 'site/contact'?>" class="btn btn-primary"><i class="i-before ti-email"></i>Contact Us</a>
                        </div>
                    </div>
    			</div>
    		</div>
    	</section>

    </div>
    <!-- Content / End -->