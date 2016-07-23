<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$value = Yii::$app->request->get('id');
$image = \app\models\Lily_images::findAll($value);
//echo("<pre>".  print_r($image,true)."</pre>");
$row = $image[0];
//echo("<pre>".  print_r($url['image_url'],true)."</pre>");
//die;
?>

<div class="site-detail" align="center">

    <div class="gallery_detail">
        <a href="#" class="img-rounded">
            <img src="<?= $row['image_url'] ?>" alt="..." width="60%" height="auto">
          </a>
    </div>

    <div class="gallery-content">

        <div class="row">
            <div class="col-lg-12">
                <h4>Gallery Image: <?= $row['image_id'] ?></h4>

                <p><?= $row['image_desc'] ?></p>

            </div>
        </div>

    </div>
</div>