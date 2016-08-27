<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Lily Home';
//$avatar = "https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/929321_155787311462176_1383367454_n.jpg";
$avatar = "https://scontent-mia1-1.cdninstagram.com/t51.2885-15/e35/12826075_668782806593860_155981501_n.jpg";

$btn_photo = 'https://static1.squarespace.com/static/52150b0ae4b0a304617b5518/52a1e579e4b0f50b7a90457a/52a1e579e4b0f50b7a90457b/1385418077437/camera+icon-green.png';
$btn_video = 'https://sterlingpr.com/wp-content/uploads/2014/04/Blue-Video-Slate.png';
$btn_about = 'https://pixabay.com/static/uploads/photo/2012/04/11/11/39/footprint-27615_960_720.png';

$photos = Url::to(['/site/gallery'],true);;
$videos = Url::to(['/site/video'],true);;
$about = Url::to(['/site/about'],true);;
        
?>
<div class="site-index" align="center">

    <div class="col-lg-12"> <!--class="jumbotron"-->
         
        <h1>Hello!</h1>
        <p class="lead">Welcome to My Tiny Fabulous Life.</p>
        <div style="margin-bottom: 30px;">
            <img class="img-circle" src="<?= $avatar ?>" alt="..." width="50%">
        </div>
    </div>
    <!--<div class="home-content">-->
    
    <div class="col-md-6 col-md-offset-3">
        <div class="home_border">
            <div class="home_btns">
                <a href="<?= $photos?>">
                    <img class="home_btns" src="/images/icon_camera6.png" alt="..." width="30%">
                </a>
                <a href="<?= $videos?>">
                    <img class="home_btns" src="/images/icon_video3.png" alt="..." width="30%">
                </a>
                <a href="<?= $about?>">
                    <img class="home_btns" src="/images/icon_pawprint2.png" alt="..." width="30%">
                </a>
            </div>
        </div>
    </div>

    <!--</div>-->
</div>
