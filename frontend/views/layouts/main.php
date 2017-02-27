<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=Html::csrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody()?>

<!-- Loader -->
<div id="page-loader"><svg class="loader-1" width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><circle class="circle-1" fill="none" stroke-width="2" stroke-linecap="round" cx="16" cy="16" r="15"></circle><circle class="circle-2" fill="none" stroke-width="2" stroke-linecap="round" cx="16" cy="16" r="15"></circle></svg></div>
<!-- Loader / End -->

<!-- Body Wrapper -->
<div id="body-wrapper">

	<!-- Header -->
	<?=$this->render('header')?>
	<!-- Header / End -->

	<!-- Content -->
	 <?=Alert::widget()?>
 	 <?=$content?>
    <!-- Content / End -->

    <!-- Footer -->
    <?=$this->render('footer')?>
    <!-- Footer / End -->

</div>
<!-- Body Wrapper / End -->

<!-- Notification Bar -->
<div id="notification-bar">Yeah! You will recieve a confirmation email soon...</div>

<!-- Back to top -->
<a href="#" id="back-to-top"><i class="ti-angle-up"></i></a>

<!-- Modal / Video -->
<div class="modal modal-video fade" id="modalVideo" role="dialog">
    <button class="close" data-dismiss="modal"><i class="ti-close"></i></button>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <iframe height="500"></iframe>
        </div>
    </div>
</div>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
