<?php

/* @var $this yii\web\View */

$this->title = 'Final Salary Transfer';
?>

<!-- Content -->
    <div id="content">
    
        <!-- Section -->
       <!--  <section id="intro" class="section-image-edge right h-md bg-primary-gradient dark"> -->

            <!-- BG Slideshow -->
            <!-- <div class="bg-slideshow">
                <div class="bg-image"><img src="themes/img/photos/creditUnion_bg01.jpg" alt=""></div>   
                <div class="bg-image"><img src="themes/img/photos/creditUnion_bg05.jpg" alt=""></div>   
                <div class="bg-image"><img src="themes/img/photos/creditUnion_bg06.jpg" alt=""></div>   
            </div>

            <div class="container v-center" data-local-scroll>
                <div class="row">
                    <div class="col-lg-8 col-lg-push-2">
                        <div class="layer layer-fadeInLeft"><h1 class="text-xl mb-0"><span class="text-primary">Life</span> Insurance</h1></div>
                        <div class="layer layer-fadeInRight"><p class="lead text-muted">Protect yourself and your family in case your disease</p></div>
                        <!- - <div class="layer layer-fadeInUp"><a href="#services" class="btn btn-primary">Go to our services</a></div> - ->
                    </div>
                </div>
            </div>-->
            
        <!-- </section> -->
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

            <div class="bg-image bg-multiply" style="background-image: url('themes/img/photos/accountancy_bg01.jpg';);"><img src="themes/img/photos/accountancy_bg01.jpg" alt="" style="display: none;"></div>

            <div class="image bottom col-md-6 col-md-push-6 animated hidden-xs hidden-sm fadeInUp visible" data-animation="fadeInUp">
                <img src="themes/img/photos/accountancy_photo01.png" alt="">
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
            
            <!--<div class="image col-md-8 col-md-push-4">
                <div class="bg-image" style="background-image: url('themes/img/photos/consumer_bg02.jpg');"><img src="themes/img/photos/consumer_bg02.jpg" alt="" style="display: none;"></div>
            </div>-->

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
    		<div class="bg-image" style="background-image: url('themes/img/photos/consumer_bg08.jpg');"><img src="themes/img/photos/consumer_bg08.jpg" alt="" style="display: none;"></div>
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
                                        <img src="themes/img/avatars/avatar01.jpg" alt="">
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
                                        <img src="themes/img/avatars/avatar02.jpg" alt="">
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
        <div class="side-panel-wrapper side-panel-wrapper-remove-width ">

            

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
                    
                    <div>
                        

                    </div>
                </section>
            </div> 
        
        <a href="#" class="close" data-toggle="side-panel"><i class="ti-close"></i></a>
    </nav>

<?php /*
        <!-- Section -->
        <section id="services" class="section-bg-edge right">

            <div class="relative container">
                <h2 class="text-center mb-0"><em>What</em> do you need?</h2>
                <p class="text-center text-muted lead mb-60">Check our full offer and pick perfect credit for you!</p>

                <nav class="text-center">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills mb-60" role="tablist">
                        <li class="active"><a href="#cashLoan" role="tab" data-toggle="tab"><i class="ti-wallet"></i>Cash Loan</a></li>
                        <li><a href="#mortgageCredit" role="tab" data-toggle="tab"><i class="ti-home"></i>Mortgage Credit</a></li>
                        <li><a href="#consumerCredit" role="tab" data-toggle="tab"><i class="ti-bag"></i>Consumer Credit</a></li>
                    </ul>
                </nav>
            </div>
            
            <!-- Tabs -->
            <div class="tab-content">
                <!-- Tab - single -->
                <div role="tabpanel" class="tab-pane active fade in" id="cashLoan">
                    <div class="image col-md-8 col-md-push-4">
                        <div class="bg-image top"><img src="assets/img/photos/creditUnion_bg02.jpg" alt=""></div>
                    </div>

                    <div class="container">
                        <div class="col-md-6 pt-0">
                            <h2>Get <em>cash loan</em> in 5 minutes!</h2>
                            <p class="lead text-muted mb-50">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Feature -->
                                    <div class="counter counter-3 animated" data-animation="fadeIn">
                                        <span class="number text-primary">5%</span>
                                        <h5>Credit Interests</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Feature -->
                                    <div class="counter counter-3 animated" data-animation="fadeIn" data-animation-delay="200">
                                        <span class="number text-secondary">12-96</span>
                                        <h5>Months of Repayment</h5>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-15">Interested in our <span class="text-primary">Cash Loan</span>?</h5>
                            <a href="#" class="btn btn-secondary btn-sm">Get in now!</a>
                        </div>
                    </div>
                </div>
                <!-- Tab - single -->
                <div role="tabpanel" class="tab-pane fade" id="mortgageCredit">
                    <div class="image col-md-8 col-md-push-4">
                        <div class="bg-image top"><img src="assets/img/photos/creditUnion_bg03.jpg" alt=""></div>
                    </div>

                    <div class="container">
                        <div class="col-md-6 pt-0">
                            <h2>Make your <em>dreams</em> come true with Us!</h2>
                            <p class="lead text-muted mb-50">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Feature -->
                                    <div class="counter counter-3 animated" data-animation="fadeIn">
                                        <span class="number text-primary">6%</span>
                                        <h5>Cretit Interests</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Feature -->
                                    <div class="counter counter-3 animated" data-animation="fadeIn" data-animation-delay="400">
                                        <span class="number text-secondary">10-35</span>
                                        <h5>Years of repayment</h5>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-15">Interested in our <span class="text-primary">Martgage Credit</span>?</h5>
                            <a href="#" class="btn btn-secondary btn-sm">Get in now!</a>
                        </div>
                    </div>
                </div>
                <!-- Tab - single -->
                <div role="tabpanel" class="tab-pane fade" id="consumerCredit">
                    <div class="image col-md-8 col-md-push-4">
                        <div class="bg-image top"><img src="assets/img/photos/creditUnion_bg04.jpg" alt=""></div>
                    </div>

                    <div class="container">
                        <div class="col-md-6 pt-0">
                            <h2>Easy to get <em>consumer credit</em> for everyone!</h2>
                            <p class="lead text-muted mb-50">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie, urna turpis tempor elit, in congue tellus lacus eget enim.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Feature -->
                                    <div class="counter counter-3 animated" data-animation="fadeIn">
                                        <span class="number text-primary">5%</span>
                                        <h5>Credit Interests</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Feature -->
                                    <div class="counter counter-3 animated" data-animation="fadeIn" data-animation-delay="200">
                                        <span class="number text-secondary">12-96</span>
                                        <h5>Months of Repayment</h5>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-15">Interested in our <span class="text-primary">Consumer Credit</span>?</h5>
                            <a href="#" class="btn btn-secondary btn-sm">Get in now!</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Section -->
        <section id="secondary-features" class="bg-primary dark">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Feature -->
                        <div class="feature feature-2">
                            <span class="icon icon-default"><i class="pe-7s-display1"></i></span>
                            <div class="feature-content">
                                <h5>Insure your loan</h5>
                                <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Feature -->
                        <div class="feature feature-2">
                            <span class="icon icon-default"><i class="pe-7s-diamond"></i></span>
                            <div class="feature-content">
                                <h5>Low credit interest</h5>
                                <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Feature -->
                        <div class="feature feature-2">
                            <span class="icon icon-default"><i class="pe-7s-like"></i></span>
                            <div class="feature-content">
                                <h5>You decide!</h5>
                                <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Section -->
        <section id="how-it-works">

            <div class="container">
                <h2 class="text-center mb-0"><em>How</em> does it works?</h2>
                <p class="text-center text-muted lead mb-80">Check our full offer and pick perfect credit for you!</p>

                <div class="row mb-60">
                    <div class="col-md-6">
                        <!-- Accordion -->
                        <div class="panel-group" role="tablist" aria-multiselectable="true">
                            <!-- Panel -->
                            <div class="panel panel-2">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapseOneAlt" aria-expanded="false">How does it works?</a>
                                    </h4>
                                </div>
                                <div id="collapseOneAlt" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <p class="lead">Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt.</p>
                                        <p>Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel -->
                            <div class="panel panel-2">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapseTwoAlt" aria-expanded="false">How long we will consider your request?</a>
                                    </h4>
                                </div>
                                <div id="collapseTwoAlt" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <p class="lead">Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt.</p>
                                        <p>Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel -->
                            <div class="panel panel-2">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapseThreeAlt" aria-expanded="false">Required documents</a>
                                    </h4>
                                </div>
                                <div id="collapseThreeAlt" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <p class="lead">Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt.</p>
                                        <p>Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel -->
                            <div class="panel panel-2">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapseFourAlt" aria-expanded="false">How does it works?</a>
                                    </h4>
                                </div>
                                <div id="collapseFourAlt" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <p class="lead">Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt.</p>
                                        <p>Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel -->
                            <div class="panel panel-2">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapseFiveAlt" aria-expanded="false">How is the credit insurance real cost?</a>
                                    </h4>
                                </div>
                                <div id="collapseFiveAlt" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <p class="lead">Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt.</p>
                                        <p>Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Video Box -->
                        <div class="video-box placeholder-image text-center shadow">
                            <div class="image">
                                <img src="assets/img/photos/creditUnion_photo01.jpg" alt="">
                            </div>
                            <a href="https://www.youtube.com/embed/uVju5--RqtY?rel=0&autoplay=1" class="btn-play"></a>
                        </div>
                    </div>        
                </div>  

                <p class="lead text-center text-muted mb-60">as you can see it is simple and very easy...</p>

                <div class="row workflow-steps">
                    <span class="workflow-progress animated"></span>
                    <div class="col-md-4">
                        <!-- Feature -->
                        <div class="step feature feature-1 text-center animated" data-animation-delay="500">
                            <span class="icon icon-white icon-circle"><i class="pe-7s-mouse"></i></span>
                            <h5>1. Send a request</h5>
                            <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Feature -->
                        <div class="step feature feature-1 text-center animated" data-animation-delay="1900">
                            <span class="icon icon-white icon-circle"><i class="pe-7s-pen"></i></span>
                            <h5>2. Get our decision</h5>
                            <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Feature -->
                        <div class="step feature feature-1 text-center animated" data-animation-delay="3300">
                            <span class="icon icon-white icon-circle"><i class="pe-7s-plane"></i></span>
                            <h5>3. Spent you money!</h5>
                            <p class="text-muted">Quisque ac augue vitae lorem mollis tempor. Vivamus laoreet, dolor et commodo molestie.</p>
                        </div>
                    </div>
                </div>


            </div>

        </section>
*/ ?>
    </div>
    <!-- Content / End -->
