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
                        <div class="counter counter-3 counter-3-3">
                            <!--<span class="icon icon-default"><i class="pe-7s-diamond"></i></span>-->
                            <span class="number">+18.00</span>
                            <h4 class="text-muted">Happy Clients</h4>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <!-- Counter -->
                        <div class="counter counter-3 counter-3-3">
                            <!--<span class="icon icon-default"><i class="pe-7s-clock"></i></span>-->
                            <span class="number">15</span>
                            <h4 class="text-muted">Years of experience</h4>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <!-- Counter -->
                        <div class="counter counter-3 counter-3-3">
                            <!--<span class="icon icon-default"><i class="pe-7s-medal"></i></span>-->
                            <span class="number">25</span>
                            <h4 class="text-muted">Professional Team</h4>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <!-- Counter -->
                        <div class="counter counter-3 counter-3-3">
                            <!--<span class="icon icon-default"><i class="pe-7s-medal"></i></span>-->
                            <span class="number">25</span>
                            <h4 class="text-muted">Professional Team</h4>
                        </div>
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
                        <div class="slide">
                            <h5 class="text-muted">Accountancy Services</h5>
                            <h1>We will <em>take care</em> about your finances</h1>
                            <a href="<?=Yii::$app->homeUrl . 'site/pages?page=page-trust'?>" class="btn btn-ghost">Read More</a>
                        </div>
                        <!-- Slide -->
                        <div class="slide">
                            <h5 class="text-muted">Finance Advising</h5>
                            <h1>Make your <em>future</em> financially safe</h1>
                            <a href="<?=Yii::$app->homeUrl . 'site/pages?page=page-whyme'?>" class="btn btn-ghost">Read More</a>
                        </div>
                        <!-- Slide -->
                        <div class="slide">
                            <h5 class="text-muted">DB Tranfer</h5>
                            <h1>Defined benefit <em>pension</em> transfer</h1>
                            <a href="<?=Yii::$app->homeUrl . 'site/pages?page=defined-benefit-pension-transfer'?>" class="btn btn-ghost">Read More</a>
                        </div>
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
                        <div class="feature feature-1 feature-lg boxed bg-light animated fadeInUp visible cursor-pointer" data-animation="fadeInUp" data-toggle="side-panel">
                            <span class="icon icon-white icon-circle icon-lg"><i class="pe-7s-graph1"></i></span>
                            <h5>Legacy Planning</h5>
                            <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Feature -->
                        <div class="feature feature-1 feature-lg boxed bg-light animated fadeInUp visible cursor-pointer" data-animation="fadeInUp" data-toggle="side-panel">
                            <span class="icon icon-white icon-circle icon-lg"><i class="pe-7s-graph1"></i></span>
                            <h5>Control On Income</h5>
                            <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Feature -->
                        <div class="feature feature-1 feature-lg boxed bg-light animated fadeInUp visible cursor-pointer" data-animation="fadeInUp" data-animation-delay="200" data-toggle="side-panel">
                            <span class="icon icon-white icon-circle icon-lg"><i class="pe-7s-chat"></i></span>
                            <h5>Control On Investments</h5>
                            <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Feature -->
                        <div class="feature feature-1 feature-lg boxed bg-light animated fadeInUp visible cursor-pointer" data-animation="fadeInUp" data-animation-delay="200" data-toggle="side-panel">
                            <span class="icon icon-white icon-circle icon-lg"><i class="pe-7s-chat"></i></span>
                           <h5>Tax planning</h5>
                            <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                        </div>
                    </div>
                <!--</div>-->
            </div>

        </section>

        <section id="stats" class="cover text-center">
            <div class="container-fluid">
                <div class="row row-color dark">
                    <div class="col-sm-4">
                        <!-- Counter -->
                        <div class="counter counter-2">
                            <span class="icon icon-default"><i class="pe-7s-diamond"></i></span>
                            <span class="number">+18.00</span>
                            <h4 class="text-muted">Happy Clients</h4>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- Counter -->
                        <div class="counter counter-2">
                            <span class="icon icon-default"><i class="pe-7s-clock"></i></span>
                            <span class="number">15</span>
                            <h4 class="text-muted">Years of experience</h4>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- Counter -->
                        <div class="counter counter-2">
                            <span class="icon icon-default"><i class="pe-7s-medal"></i></span>
                            <span class="number">25</span>
                            <h4 class="text-muted">Professional Team</h4>
                        </div>
                    </div>
                </div>
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
            <div class="side-panel-wrapper side-panel-wrapper-remove-width">
                <!-- Section -->
                <section class="pt-0 text-center">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-8">
                                <p class="lead">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed lorem nunc, sagittis bibendum rutrum id, volutpat id elit.</p>
                                <p>Donec velit velit, porta ut fermentum et, ultricies sed eros. Fusce congue risus sit amet facilisis aliquet. Nam ex urna, faucibus porttitor nulla ultrices, varius malesuada diam. </p>
                                <p class="lead">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed lorem nunc, sagittis bibendum rutrum id, volutpat id elit.</p>
                                <p>Donec velit velit, porta ut fermentum et, ultricies sed eros. Fusce congue risus sit amet facilisis aliquet. Nam ex urna, faucibus porttitor nulla ultrices, varius malesuada diam. </p>
                                <p class="lead">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed lorem nunc, sagittis bibendum rutrum id, volutpat id elit.</p>
                                <p>Donec velit velit, porta ut fermentum et, ultricies sed eros. Fusce congue risus sit amet facilisis aliquet. Nam ex urna, faucibus porttitor nulla ultrices, varius malesuada diam. </p>
                                <a href="#" class="btn btn-filled btn-primary">Button primary</a>
                                <a href="#" class="btn btn-filled btn-primary">Button primary</a>
                            </div>
                        </div>

                    </div>
                </section>
            </div> 
            
            <a href="#" class="close" data-toggle="side-panel"><i class="ti-close"></i></a>
        </nav>
    </div>
    <!-- Content / End -->
