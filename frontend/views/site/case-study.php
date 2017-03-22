<?php 

use yii\helpers\Html;

$this->title = 'Case Study';
?>

<!-- Page Title -->
<div id="page-title" class="page-title page-title-1 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><?= $this->title?></h1>
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
    <section>
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="content col-md-9">
                    <h3> Objective </h3>
                    <p>Ted wants his 25% tax-free lump sum and then to invest the rest.</p>
                    <p>Ted is planning to help his daughter with her university costs. So he’s planning on taking 25% of his pension pot as a tax-free single lump sum. He thinks he would then like to leave the rest of his money invested, but have flexible access to it so he can take money as and when he needs it. </p>
                    <p>Ted can take the rest of his money out whenever he wants, but it will be subject to tax as he took his tax-free allowance up front. By accessing his money in this way he will reduce the maximum amount he can save into pensions.  </p>
                </div>
                <!-- Sidebar -->
                <div class="sidebar col-md-3 clearfix">
                    <!-- Widget - Portfolio -->
                    <div class="text-center">
                        <!-- Spread Items -->
                        <div class="spread-items mb-10">
                            <span class="icon icon-default icon-lg"><i class="pe-7s-comment"></i></span>
                        </div>
                        <h3 class="mb-50">Did not <em>find</em> your answer?</h3>
                        <a href="{contact}" class="btn btn-primary"><i class="i-before ti-email"></i>Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section>
        <div class="container">
            <div class="row">
                <div class=""><!-- col-lg-8 col-lg-push-2-->
                    <!-- Accordion -->
                    <div class="panel-group" role="tablist" aria-multiselectable="true">
                        <!-- Panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="false">There are other factors that have an impact on what Ted gets</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <!-- Price Table -->
                                            <div class="price-table-1 animated fadeIn visible" data-animation="fadeIn">
                                                <!--<div class="head">
                                                    <h3 class="title">Benefits</h3>
                                                    <span class="text-muted">With flexible access to your pension pot, you could:</span>
                                                </div>-->
                                                <p> Ted is 65 and has a pension pot of £70,000. He intends to continue paying £200 a month into it for the next 0 years. </p>
                                                <p> After which he plans on taking his 25% tax-free lump sum of £17,500 so he can help his daughter pay for her university fees. The remaining £52,500 he’ll put into an flexible drawdown.</p>
                                                <p> Flexible drawdown will allow Ted to leave his money invested as it potentially continues to grow. He could decide to take a regular income from it until it runs out, or withdraw money as and when he needs it. He could even use some of it to buy an annuity.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Price Table -->
                                            <div data-animation="fadeIn" data-animation-delay="400" class="price-table-1 animated fadeIn visible widget-price-table ">
                                                <!--<div class="head">
                                                    <h3 class="title">Technical Notes</h3>
                                                    <span class="text-muted">The following important points should be considered for both Flexible-Access Drawdown and Partial Pension Encashment:</span>
                                                </div>-->
                                                <span class="text-muted">His pension pot now </span>
                                                <div class="price">
                                                    <span class="currency">&#163;</span>70,000</span>
                                                </div>
                                                <span class="text-muted">His pension pot in 0 years</span>
                                                <div class="price">
                                                    <span class="currency">&#163;</span>70,000</span>
                                                </div>
                                                <span class="text-muted">His tax-free lump sum in 0 years</span>
                                                <div class="price">
                                                    <span class="currency">&#163;</span>17,500</span>
                                                </div>
                                                <span class="text-muted">Ted's flexible drawdown pot </span>
                                                <div class="price">
                                                    <span class="currency">&#163;</span>52,500</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>