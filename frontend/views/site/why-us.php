
<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Why Us';
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
                        <li class="active"><?=$this->title;?></li>
    				</ol>
    			</div>
    		</div>
    	</div>
    </div>

<!-- Content -->
<div id="content">
    <section class="section-image-edge section-lg">

    		<div class="image right center col-md-6 col-md-push-6">
    			<?php echo Html::img('@web/themes/img/photos/consumer_photo03.jpg',['alt'=>'consumer_photo03', 'class'=>"shadow mb-40"]) ?>
    		</div>
    		<div class="container">
    			<div class="col-lg-4 col-md-5 content">
    				<h1>Perfect as <em>finance</em> website!</h1>
    				<p class="lead text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    				<p class="text-muted">Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
    				<strong>Piotr Osmola</strong> - the inventor
    				<div><?php echo Html::img('@web/themes/img/svg/sign01.svg',['alt'=>'sign01','class'=>"img-rounded mt-30 mb-30"]) ?></div>
    				<a href="#" class="btn btn-filled btn-primary">Learn more <i class="i-after ti-angle-right"></i></a>
    			</div>
    		</div>

    	</section>
        <section class="section-xs bg-primary dark animated" data-animation="slideInUp">
            <h5 class="text-center mb-0">Get started with a Phone Call <a href="tel:02033761444">020 3376 1444</a></h5>
        </section>
        <section class="section-image-edge section-lg">

    		<div class="image left center col-md-6">
                <?php echo Html::img('@web/themes/img/photos/stockBroker_photo03.jpg',['alt'=>'stockBroker_photo03.jpg', 'class'=>"mb-40"]) ?>
    		</div>
    		<div class="container">
    			<div class="col-lg-4 col-md-5 col-md-push-7 content">
    				<h1><em>Stand out</em> from the crowd!</h1>
    				<p class="lead text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    				<p class="text-muted">Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
    				<strong>Piotr Osmola</strong> - the inventor
    				<div><?php echo Html::img('@web/themes/img/svg/sign01.svg',['alt'=>'sign01','class'=>"img-rounded mt-30 mb-30"]) ?></div>
    				<a href="#" class="btn btn-filled btn-primary">Learn more	<i class="i-after ti-angle-right"></i></a>
    			</div>
    		</div>

    	</section>
        <!-- Section -->
        <section class="bg-primary dark">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 col-lg-push-2">
                        <h3>On Primary Background</h3>
                        <p class="lead mb-60">Workflow Diagram can show any process in really cool, animated way. It is important to synchronize it by <code>data-animtion-delay</code> attributes.</p>
                    </div>
                </div>
                <div class="row workflow-steps">
                    <span class="workflow-progress animated"></span>
                    <!-- Step -->
                    <div class="col-md-4">
                        <div class="step pl-20-lg pr-20-lg animated" data-animation-delay="700">
                            <span class="icon icon-circle icon-primary"><i class="ti-pie-chart"></i></span>
                            <h5>1. Understanding you</h5>
                            <p class="text-muted">An opportunity to discover what you really want to achieve for your financial future and in life. We will listen to you in order to understand your current situation and any specific issues concerning you.</p>
                        </div>
                    </div>
                    <!-- Step -->
                    <div class="col-md-4">
                        <div class="step pl-20-lg pr-20-lg animated" data-animation-delay="2000">
                            <span class="icon icon-circle icon-primary"><i class="ti-ruler-pencil"></i></span>
                            <h5>2. Meeting</h5>
                            <p class="text-muted">Identifying any gaps between what you really want and where you are currently heading. We will help you to discover your true goals for your financial future.</p>
                        </div>
                    </div>
                    <!-- Step -->
                    <div class="col-md-4">
                        <div class="step pl-20-lg pr-20-lg animated" data-animation-delay="3300">
                            <span class="icon icon-circle icon-primary"><i class="ti-stats-up"></i></span>
                            <h5>3. Closing the gap</h5>
                            <p class="text-muted">Together we develop and propose options and practical solutions that can achieve an outcome that really reflects your needs and your goals. You then choose which option best suits you.</p>
                        </div>
                    </div>
                </div>
                <div class="row workflow-steps">
                    <span class="workflow-progress animated animated1"></span>
                    <!-- Step -->
                    <div class="col-md-4">
                        <div class="step pl-20-lg pr-20-lg animated" data-animation-delay="4600">
                            <span class="icon icon-circle icon-primary"><i class="ti-pie-chart"></i></span>
                            <h5>4. Build a plan</h5>
                            <p class="text-muted">With you we develop a solid financial plan specific to your chosen model and one that truly reflects your individual needs and situation.</p>
                        </div>
                    </div>
                    <!-- Step -->
                    <div class="col-md-4">
                        <div class="step pl-20-lg pr-20-lg animated" data-animation-delay="5900">
                            <span class="icon icon-circle icon-primary"><i class="ti-ruler-pencil"></i></span>
                            <h5>5. Action</h5>
                            <p class="text-muted">We will lead and coordinate the implementation of your plan, together with all necessary financial and legal partners. We will set up the right structure and firm foundation to get your financial house in order.</p>
                        </div>
                    </div>
                    <!-- Step -->
                    <div class="col-md-4">
                        <div class="step pl-20-lg pr-20-lg animated" data-animation-delay="7200">
                            <span class="icon icon-circle icon-primary"><i class="ti-stats-up"></i></span>
                            <h5>6. Review/Respond/Correct</h5>
                            <p class="text-muted">We will continue to monitor your situation and chosen plan to ensure that any evolving changes and opportunities are handled in an accurate and timely manner - remember, we are with you for the long haul.We set benchmarks and tracking as well as providing regular snapshot reports to keep you on track for your financial journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>