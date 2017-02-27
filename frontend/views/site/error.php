<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div id="content">

        <!-- Section -->
        <section>

            <div class="container text-center">
                <span class="icon icon-xxl"><i class="pe-7s-glasses text-muted-3x"></i></span>
                <h1 class="mb-10">Page not found!</h1>
                <p class="lead text-muted">Oh snap... The page you requested couldn't be found - please try again...</p>
                <a href="<?=Yii::$app->homeUrl?>" class="btn btn-default btn-sm"><i class="i-before ti-angle-left"></i>Go to the Home</a>
            </div>

        </section>

    </div>
