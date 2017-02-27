<?php 

$this->title = $page['page_title'];
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

    <!-- Section -->
    <section>

        <div class="container">
            <div class="row">

                <!-- Content -->
                <div class="content col-md-9">
                    <?=$page['content'];?>
                </div>

                <!-- Sidebar -->
                <div class="sidebar col-md-3 clearfix">

                    <!-- Widget - Newsletter -->
                    <!--<div class="widget widget-newsletter">
                        <h6>Subscribe Us</h6>
                        <form action="//suelo.us12.list-manage.com/subscribe/post-json?u=ed47dbfe167d906f2bc46a01b&amp;id=24ac8a22ad" id="sign-up-form2" class="sign-up-form validate-form" method="POST"
                            data-message-error="Opps... Something went wrong - please try again later"
                            data-message-success="Yeah! You will recieve a confirmation email soon..."
                        >
                            <div class="form-group">
                                <input type="email"  name="EMAIL" id="mce-EMAIL2" value="" class="form-control input-sm" placeholder="Your e-mail..." required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-submit btn-sm"><span>Sign Up</span><span class="loader-2"></span></button>
                            </div>
                        </form>
                    </div>-->

                    <!-- Widget - Portfolio -->
                    <div class="widget widget-portfolio text-center">
                        <h4>Meet Us</h4>
                        <!--div class="carousel" data-single-item="true" data-autoplay="3000">-->
                            <!-- Image -->
                            <div class="image-box text-center">
                                <div class="image">
                                    <img src="<?=Yii::$app->homeUrl .'themes/img/members/member01_v.jpg'?>" alt="">
                                </div>
                                <div class="title">
                                    <a href="#">
                                        <h5 class="mb-0">The Flower</h5>
                                        <span class="text-muted">Webdesign</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Image -->
                            <div class="image-box text-center">
                                <div class="image">
                                    <img src="<?=Yii::$app->homeUrl .'themes/img/members/member02_v.jpg'?>" alt="">
                                </div>
                                <div class="title">
                                    <a href="#">
                                        <h5 class="mb-0">The Bridge</h5>
                                        <span class="text-muted">Webdesign</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Image -->
                            <div class="image-box text-center">
                                <div class="image">
                                    <img src="<?=Yii::$app->homeUrl .'themes/img/members/member03_v.jpg'?>" alt="">
                                </div>
                                <div class="title">
                                    <a href="#">
                                        <h5 class="mb-0">The Wind</h5>
                                        <span class="text-muted">Webdesign</span>
                                    </a>
                                </div>
                            </div>
                        <!--</div>-->
                    </div>

                </div>

            </div>
        </div>

    </section>

</div>
<!-- Content / End -->