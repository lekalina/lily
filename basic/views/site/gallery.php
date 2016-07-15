<?php
//die("<pre>".print_r($images,true)."</pre>");
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Lily Gallery';
$this->params['breadcrumbs'][] = $this->title;
//$url = Url::to(['/site/detail'],true);

?>
<div class="site-about">
    <!--<h1><?php //Html::encode($this->title) ?></h1>-->

    <div class="row">
        <?php foreach($images as $image): ?>
        <div class="col-xs-6 col-md-3">
            <?php $url = Url::to(['/site/detail','id'=>$image['image_id']],true); ?>
          <a href="<?= $url?>" class="thumbnail">
              <img class="gallery_thumb" src="<?= $image['image_url'] ?>" alt="...">
          </a>
        </div>
        <?php endforeach ?>
    </div>

    <!--<code><?php // __FILE__ ?></code>-->
</div>
