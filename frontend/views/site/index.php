<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Final Salary Transfer';
?>

<!-- Content -->
    <div id="content">
        <section id="stats" class="cover text-center">
            <div class="container-fluid">
                <div class="row row-color dark">
                    <div class="col-xs-3">
                        <!-- Counter -->
                        <?= Html::tag('div', '<span class="number">+18.00</span><h4 class="text-muted">Happy Clients</h4>', ['class'=>'counter counter-3 counter-3-3']);?>
                    </div>
                    <div class="col-xs-3">
                        <!-- Counter -->
                        <?= Html::tag('div', '<span class="number">15</span><h4 class="text-muted">Years of experience</h4>', ['class'=>'counter counter-3 counter-3-3']);?>
                    </div>
                    <div class="col-xs-3">
                        <!-- Counter -->
                        <?= Html::tag('div', '<span class="number">25</span><h4 class="text-muted">Professional Team</h4>', ['class'=>'counter counter-3 counter-3-3']);?>
                    </div>
                    <div class="col-xs-3">
                        <!-- Counter -->
                        <?= Html::tag('div', '<span class="number">25</span><h4 class="text-muted">Professional Team</h4>', ['class'=>'counter counter-3 counter-3-3']);?>
                    </div>
                </div>
            </div>
        </section>

        <section id="intro" class="section-image-edge right h-md bg-primary-gradient dark" data-local-scroll="">

            <div class="bg-image bg-multiply" style="background-image: url('themes/img/photos/accountancy_bg01.jpg';);"><?php echo Html::img('@web/themes/img/photos/accountancy_bg01.jpg',['alt'=>'accountancy_bg01','style'=>"display: none;"]) ?></div>

            <div class="image bottom col-md-6 col-md-push-6 animated hidden-xs hidden-sm fadeInUp visible" data-animation="fadeInUp">
                <?php echo Html::img('@web/themes/img/photos/accountancy_photo01.jpg',['alt'=>'accountancy_photo01']) ?>
            </div>

            <div class="content container v-center text-center">
                <div class="col-md-6 animated" data-animation="fadeIn">
                    <div class="carousel" data-single-item data-pagination data-navigation data-autoplay="4000" data-transition="fade">
                        <!-- Slide -->
                        <?= Html::tag('div', '<h5 class="text-muted">Accountancy Services</h5><h1>We will <em>take care</em> about your finances</h1>'. Html::a('Read More', ['site/pages','page'=>'page-trust'],['class'=>"btn btn-ghost"]), ['class'=>'slide']);?>
                        <!-- Slide -->
                        <?= Html::tag('div', '<h5 class="text-muted">Finance Advising</h5><h1>Make your <em>future</em> financially safe</h1>'.Html::a('Read More', ['site/pages','page'=>'page-whyme'],['class'=>"btn btn-ghost"]), ['class'=>'slide']);?>
                        <!-- Slide -->
                        <?= Html::tag('div', '<h5 class="text-muted">DB Tranfer</h5><h1>Defined benefit <em>pension</em> transfer</h1>'. Html::a('Read More', ['site/pages','page'=>'defined-benefit-pension-transfer'],['class'=>"btn btn-ghost"]), ['class'=>'slide']);?>
                    </div>
                </div>
            </div>
            
        </section>

        <!-- Section -->
        <section id="services" class="cover protrude pull-up-30 text-center">
            
            <!--<div class="container">--><!-- new-container -->
                <div class="row">
                    <div class="col-md-3">
                        <!-- Feature -->
                        <div class="feature feature-1 feature-lg boxed bg-light animated fadeInUp visible cursor-pointer onclickFlexibility" data-animation="fadeInUp">
                            <span class="icon icon-white icon-circle icon-lg"><i class="pe-7s-graph1"></i></span>
                            <h5>Flexibility</h5>
                            <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Feature -->
                        <div class="feature feature-1 feature-lg boxed bg-light animated fadeInUp visible cursor-pointer" data-animation="fadeInUp" data-toggle="side-panel">
                            <span class="icon icon-white icon-circle icon-lg"><i class="pe-7s-graph1"></i></span>
                            <h5>Potential for access to more tax-free cash</h5>
                            <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Feature -->
                        <div class="feature feature-1 feature-lg boxed bg-light animated fadeInUp visible cursor-pointer" data-animation="fadeInUp" data-animation-delay="200" data-toggle="side-panel">
                            <span class="icon icon-white icon-circle icon-lg"><i class="pe-7s-chat"></i></span>
                            <h5>Inheritance</h5>
                            <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Feature -->
                        <div class="feature feature-1 feature-lg boxed bg-light animated fadeInUp visible cursor-pointer" data-animation="fadeInUp" data-animation-delay="200" data-toggle="side-panel">
                            <span class="icon icon-white icon-circle icon-lg"><i class="pe-7s-chat"></i></span>
                           <h5>Concerns about the solvency of the sponsoring employer</h5>
                            <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                        </div>
                    </div>
                <!--</div>-->
            </div>

        </section>

        <section id="about" class="ssection-xs bg-light text-center">
            <div class="container">
                <div class="row">
                    <h4 class="mb-60">About Blackstone Moregate</h4>
                    <p class="lead text-muted mb-50">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie, urna turpis tempor elit, in congue tellus lacus eget enim.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Feature -->
                            <div class="feature feature-1 animated fadeIn visible" data-animation="fadeIn">
                                <span class="icon icon-primary icon-sm"><i class="pe-7s-display1"></i></span>
                                <h6>Financial advising</h6>
                            </div>
                            <!-- Feature -->
                            <div class="feature feature-1 animated fadeIn visible" data-animation="fadeIn" data-animation-delay="100">
                                <span class="icon icon-primary icon-sm"><i class="pe-7s-diamond"></i></span>
                                <h6>Stock Investments</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Feature -->
                            <div class="feature feature-1 animated fadeIn visible" data-animation="fadeIn" data-animation-delay="200">
                                <span class="icon icon-primary icon-sm"><i class="pe-7s-like"></i></span>
                                <h6>Health Insurance</h6>
                            </div>
                            <!-- Feature -->
                            <div class="feature feature-1 animated fadeIn visible" data-animation="fadeIn" data-animation-delay="300">
                                <span class="icon icon-primary icon-sm"><i class="pe-7s-graph"></i></span>
                                <h6>Forex Investments</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark dark">
    		<div class="bg-image" style="background-image: url('themes/img/photos/consumer_bg08.jpg');"><?php echo Html::img('@web/themes/img/cases/consumer_bg08.jpg',['alt'=>'consumer_bg08','style'=>"display: none;"]) ?></div>
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-8 col-lg-push-2">
    					<h3 class="text-center mb-60">What clients say?</h3>
    					<div class="row">
    						<div class="col-sm-6">
    							<!-- Testimonial -->
    							<div class="testimonial testimonial-2">
    								<div class="quote">
    									Creativity is allowing yourself to make mistakes. Art is knowing which ones to keep.
    								</div>
                                    <div class="author with-image">
                                        <?php echo Html::img('@web/themes/img/avatars/avatar01.jpg',['alt'=>'avatar01']) ?>
                                        <div class="info">
                                            <span class="name">Mark Johnson</span>
                                            <span class="caption text-muted">Themeforest User</span>
                                        </div>
                                    </div>
    							</div>
    						</div>
    						<div class="col-sm-6">
    							<!-- Testimonial -->
    							<div class="testimonial testimonial-primary testimonial-2">
    								<div class="quote">
    									Success consists of going from failure to failure without loss of enthusiasm.
    								</div>
    								<div class="author with-image">
                                        <?php echo Html::img('@web/themes/img/avatars/avatar02.jpg',['alt'=>'avatar01']) ?>
                                        <div class="info">
                                            <span class="name">Mark Johnson</span>
                                            <span class="caption text-muted">Themeforest User</span>
                                        </div>
                                    </div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
        <!-- Side Panel -->
        <nav id="side-panel" class="right bg-dark dark">
            <div class="side-panel-wrapper-remove-width"><!-- side-panel-wrapper -->
                <!-- Section -->
                <section class="text-center">
                    <!-- <div class="container">-->
                        <div class="row text-center">
                            <div class="col-lg-8 col-lg-push-2">
                                <h3>FLEXIBLE ACCESS</h3>
                                <p class="lead mb-60">You can access your pension saving as and when you like, taking however much money you want.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <!-- Widget - Links -->
                                <div class="feature feature-1 boxed bg-light widget widget-slid-panel">
                                    <h4 class="text-muted">Benefits</h4>
                                    <ul class="text-left">
                                        <li>
                                            Take your money in chunks 
                                        </li>
                                        <li>
                                            Take 25% of it tax-free
                                        </li>
                                        <li>
                                            Leave the rest invested so it can potentially grow 
                                        </li>
                                        <li>
                                            Pass on the money left when you die 
                                        </li>
                                        <li>
                                            Run out of money if you don't budget properly 
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <!-- Widget - Links -->
                                <div class="feature feature-1 boxed bg-light widget widget-slid-panel2">
                                    <h4 class="text-muted">Technical Notes</h4>
                                    <ul class="text-left">
                                        <li>
                                            Unlike an annuity, these options will not provide you with a guaranteed income for life. You could run out of money if you withdraw too much or if your investment performs badly. You should continue to review the value of your product regularly and make changes if necessary
                                        </li>
                                        <li>
                                            By taking money in either of these ways, it may impact on any means-tested benefits you receive 
                                        </li>
                                        <li>
                                            With most investment products, costs and charges apply which could have a negative effect on your policy value over time. If you need to transfer to a new policy to access benefits, the charges under this new policy may be higher or lower than the product you already have. If you would like more information on how this may impact you, please call us
                                        </li>
                                        <li>
                                            Both of these options have different tax implications, which could mean you receive less money than you expected. We may initially have to use an emergency tax code which could mean you pay more tax at the outset than you originally expected. Please call us if you need more information, or contact HMRC for further guidance 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <a href="#" class="btn btn-filled btn-primary">Case Study</a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <a href="#" class="btn btn-filled btn-primary">Calculator</a>
                            </div>
                        </div>
                    <!-- </div>-->
                </section>
            </div> 
            
            <a href="#" class="close" data-toggle="side-panel"><i class="ti-close"></i></a>
        </nav>
    </div>
    <!-- Content / End -->
