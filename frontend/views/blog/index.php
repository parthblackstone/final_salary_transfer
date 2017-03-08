<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Blog';
?>
<!-- Page Title -->
<div id="page-title" class="page-title page-title-1 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><?=$this->title;?></h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="<?=Yii::$app->homeUrl?>">Home Page</a></li>
                    <li class="active">Blogs</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Page Title / End -->
<section>

    <div class="container">
        <div class="row masonry">
            <!-- <div class="masonry-sizer col-md-4 col-sm-6 col-xs-12"></div> -->
            <?php
                if($dataProvider->totalCount) {
                    foreach ($dataProvider->getModels() as $blogPost) {
                        echo '<div class="masonry-item col-md-4 col-sm-6 col-xs-12">';
                            /* Post / Item */
                            echo '<article class="post post-masonry">';
                                if($blogPost['post_thumbnail']){
                                    echo Html::tag('div', Html::img($blogPost['post_thumbnail']['link'],['alt'=>$blogPost['post_thumbnail']['title']]), ['class'=>'post-image']);
                                }
                                echo '<div class="post-content">';
                                    echo '<h4>'.Html::a($blogPost['post_title'], ['blog/single-post','id'=>$blogPost['post_id'],'post_name'=>$blogPost['post_name']]).'</h4>';
                                    echo '<ul class="post-meta">';
                                        echo '<li>'.date('d F, Y', $blogPost['post_date']->timestamp).'</li>';
                                    echo '</ul>';
                                echo '</div>';
                            echo '</article>';
                        echo '</div>';
                    }
                }
            ?>
        </div>

        <!-- Pagination -->
        <nav class="text-center">
            <?= yii\widgets\LinkPager::widget([
                'pagination' => $dataProvider->getPagination(),
                'lastPageLabel'=>'<i class="ti-angle-right"></i>',
                'firstPageLabel'=>'<i class="ti-angle-left"></i>',
                'prevPageLabel' => false,
                'nextPageLabel' => false,
            ]);?>
        </nav>
    </div>

</section>