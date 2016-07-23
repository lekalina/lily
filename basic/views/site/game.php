<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use yii\helpers\Url;

shuffle($images);
$subArray = array_slice($images,0,8);
$finalArray = array_merge_recursive($subArray, $subArray);
shuffle($finalArray);

$cardBack = "http://images.all-free-download.com/images/graphicthumb/dog_paw_seamless_pattern_312225.jpg";

?>

<div class="site-detail" align="center">

    <div class="col-md-6 col-md-offset-3">
        <?php foreach ($finalArray as $key=>$image): ?>
        <div class="col-sm-3">
            <div id="<?= $key ?>" class="game_border" dog="<?= $image['image_id'] ?>" style="cursor: pointer;">
                <a href=" <?php echo Url::to(['/site/images'],true); ?>">
                    <img src="<?= $image['image_url'] ?>" class="img-rounded" alt="..." width="100%" height="auto">
                    <!--<img src="<?php //$cardBack ?>" class="cardBack" alt="..." width="100%" height="auto" id="card_back">-->
                </a>
            </div>
        </div>
        <?php endforeach ?>
    </div>

    <div class="gallery-content">

        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>

    </div>
</div>

