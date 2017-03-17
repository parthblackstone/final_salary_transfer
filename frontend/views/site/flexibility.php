<?php 

use yii\helpers\Html;

$this->title = 'FLEXIBLE ACCESS';
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
            <h4 class="text-center mb-60">You can access your pension saving as and when you like, taking however much money you want.</h4>
            <div class="row">
                <div class="col-md-4">
                    <!-- Price Table -->
                    <div class="price-table-1 animated fadeIn visible widget-slid-panel2 featured-background-color" data-animation="fadeIn">
                        <div class="head">
                            <h3 class="title">Benefits</h3>
                            <span class="text-muted">With flexible access to your pension pot, you could:</span>
                        </div>
                        <ul class="features text-left">
                            <li>Take your money in chunks</li>
                            <li>Take 25% of it tax-free</li>
                            <li>Leave the rest invested so it can potentially grow</li>
                            <li>Pass on the money left when you die</li>
                            <li>Run out of money if you don't budget properly</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- Price Table -->
                    <div class="price-table-1 animated fadeIn visible widget-slid-panel2" data-animation="fadeIn" data-animation-delay="400">
                        <div class="head">
                            <h3 class="title">Technical Notes</h3>
                            <span class="text-muted">The following important points should be considered for both Flexible-Access Drawdown and Partial Pension Encashment:</span>
                        </div>
                        <ul class="features text-left"><!-- <i class ="ti-hand-point-right"></i> -->
                            <li>Unlike an annuity, these options will not provide you with a guaranteed income for life. You could run out of money if you withdraw too much or if your investment performs badly. You should continue to review the value of your product regularly and make changes if necessary</li>
                            <li>By taking money in either of these ways, it may impact on any means-tested benefits you receive</li>
                            <li>With most investment products, costs and charges apply which could have a negative effect on your policy value over time. If you need to transfer to a new policy to access benefits, the charges under this new policy may be higher or lower than the product you already have. If you would like more information on how this may impact you, please call us</li>
                            <li>Both of these options have different tax implications, which could mean you receive less money than you expected. We may initially have to use an emergency tax code which could mean you pay more tax at the outset than you originally expected. Please call us if you need more information, or contact HMRC for further guidance</li>
                        </ul>
                        <div class="row pt-10">
                            <div class="col-md-6">
                                    <a href="case-study" class="btn btn-filled btn-primary">Case Study</a>
                            </div>
                            <div class="col-md-6">
                                <a href="../../calculator/legacy-planning-calculator" class="btn btn-filled btn-primary">Calculator</a>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>