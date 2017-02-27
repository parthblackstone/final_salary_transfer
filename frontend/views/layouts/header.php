 <!-- Header -->
    <header id="header" class="fullwidth absolute light"> <!-- transparent-->
        
        <!--<div id="top-bar" class="bg-primary dark">
            <div class="module left">
                Welcome on <strong><?php /*Yii::$app->params['SiteName']*/?></strong>!
            </div>
            <div class="module right">
                <ul class="list-inline">
                    <li><i class="i-before ti-home text-muted"></i><a href="<?=Yii::$app->homeUrl?>">Home</a></li>
                    <li><i class="i-before ti-user text-muted"></i><a href="<?=Yii::$app->homeUrl . 'site/who-we-are'?>">Who we are</a></li>
                    <li><i class="i-before ti-list text-muted"></i><a href="<?=Yii::$app->homeUrl . 'site/news'?>">News</a></li>
                </ul>
            </div>
        </div>-->

        <div id="nav-bar">
            <div class="row">
                <div class="col-sm-2 col-xs-5">
                    <!-- Logo -->
                    <a href="<?=Yii::$app->homeUrl?>" class="logo"><?=Yii::$app->params['SiteName']?></a>   <!-- <img src="assets/img/logo-dark.png" alt=""> -->
                </div>
                <div class="menu col-sm-8 col-xs-2 text-center">
                    <!-- Main Menu -->
                    <nav id="main-menu">
                        <ul id="nav-primary" class="nav nav-primary">
                            <li> <!-- class="has-dropdown" -->
                                <a href="<?=Yii::$app->homeUrl?>">Home</a>
                            </li>
                            <li> <!-- class="has-dropdown" -->
                                <a href="<?=Yii::$app->homeUrl . 'site/who-we-are'?>">Who we are</a>
                            </li>
                            <li> <!-- class="has-dropdown" -->
                                <a href="<?=Yii::$app->homeUrl . 'site/why-us'?>">Why us</a>
                            </li>
                            <li> <!-- class="has-dropdown" -->
                                <a href="<?=Yii::$app->homeUrl . 'site/calculators'?>">Calculators</a>
                            </li>
                            <li> <!-- class="has-dropdown" -->
                                <a href="<?=Yii::$app->homeUrl . 'site/case-studies'?>">Case studies</a>
                            </li>
                            <li class="has-dropdown"> <!-- class="has-dropdown" -->
                                <a href="javascript:void(0)">Enqueries/Contact</a>
                                <ul>
                                    <li><a href="<?=Yii::$app->homeUrl . 'site/contact?office=London'?>">London Office</a></li>
                                    <li><a href="<?=Yii::$app->homeUrl . 'site/contact?office=Essex'?>">Essex Office</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-sm-2 col-xs-5">
                    <!-- Mobile Nav Toggle -->
                    <div class="module right hidden-lg">
                        <a href="#" id="mobile-nav-toggle" class="nav-toggle"><span><span></span></span></a>
                    </div>
                    <!-- Search -->
                    <div class="module right">
                        <!--<a href="#" id="search-toggle" class="trigger"><i class="ti-search"></i><i class="ti-close"></i></a>-->
                    </div>
                    <!-- Language -->
                </div>  
            </div> 
        </div>
        
    </header>
    <!-- Header / End -->