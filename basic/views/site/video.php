<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$videos = ["https://www.youtube.com/embed/fM6v4i5c-hY",
            "https://www.youtube.com/embed/2mGphUbfifc",
            "https://www.youtube.com/embed/ynIi3SNaKBU",
            "https://www.youtube.com/embed/FBiW6OhdFmE",
            "https://www.youtube.com/embed/DsxNHXhRLyg",
            "https://www.youtube.com/embed/3Ua2QxrBZo8",
            "https://www.youtube.com/embed/QW5o_vV5FbA",
            "https://www.youtube.com/embed/sIbIUl8cOug",
            "https://www.youtube.com/embed/-dBMzVX9FKE"];
$thumbs = ["https://i.ytimg.com/vi/fM6v4i5c-hY/hqdefault.jpg",
            "https://i.ytimg.com/vi/2mGphUbfifc/hqdefault.jpg",
            "https://i.ytimg.com/vi/ynIi3SNaKBU/hqdefault.jpg",
            "https://i.ytimg.com/vi/FBiW6OhdFmE/hqdefault.jpg",
            "https://i.ytimg.com/vi/DsxNHXhRLyg/hqdefault.jpg",
            "https://i.ytimg.com/vi/3Ua2QxrBZo8/hqdefault.jpg",
            "https://i.ytimg.com/vi/QW5o_vV5FbA/hqdefault.jpg",
            "https://i.ytimg.com/vi/sIbIUl8cOug/hqdefault.jpg",
            "https://i.ytimg.com/vi/-dBMzVX9FKE/hqdefault.jpg"];
$title = ['Walk in the park', 
            'Hangin with gma', 
            'Run and play', 
            'The stairs', 
            'Swimming',
            'Baby lily meets zeus', 
            '1st day home',
            'Play time',
            'Lily smile'];
$playicon = "http://cliparts.co/cliparts/6cr/5B6/6cr5B6ALi.png"
        
?>
<div class="col-lg-12" align="center">
    
    <?php foreach($videos as $key=>$video): ?>
        <div class="col-xs-6 col-md-3">
            <?php //$url = Url::to(['/site/detail','id'=>$image['image_id']],true); ?>
            <a href="<?= $video?>"  data-toggle="lightbox" class="thumbnail">
                <img src="<?= $thumbs[$key] ?>" alt="...">
                <img class="video_thumb" src="<?= $playicon ?>" alt="..." width="100%">
                <p class="video_title"><?= $title[$key] ?></p>
          </a>
        </div>
    <?php endforeach ?>
    <!--<a href="https://www.youtube.com/embed/fM6v4i5c-hY" data-toggle="lightbox">Launch modal</a>-->
    
    <!--<iframe width="350" height="600" frameborder="0"
        src="https://www.youtube.com/embed/fM6v4i5c-hY">
    </iframe>
    <iframe width="350" height="600" frameborder="0"
        src="https://www.youtube.com/embed/2mGphUbfifc">
    </iframe>
    <iframe width="350" height="600" frameborder="0"
        src="https://www.youtube.com/embed/ynIi3SNaKBU">
    </iframe>
    <iframe width="350" height="600" frameborder="0"
        src="https://www.youtube.com/embed/FBiW6OhdFmE">
    </iframe>
    <iframe width="350" height="600" frameborder="0"
        src="https://www.youtube.com/embed/DsxNHXhRLyg">
    </iframe>
    <iframe width="350" height="600" frameborder="0"
        src="https://www.youtube.com/embed/3Ua2QxrBZo8">
    </iframe>
    <iframe width="350" height="600" frameborder="0"
        src="https://www.youtube.com/embed/QW5o_vV5FbA">
    </iframe>
    <iframe width="350" height="600" frameborder="0"
        src="https://www.youtube.com/embed/sIbIUl8cOug">
    </iframe>
    <iframe width="350" height="600" frameborder="0"
        src="https://www.youtube.com/embed/-dBMzVX9FKE">
    </iframe>-->
    
</div>
<script type="text/javascript">
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    }); 
</script>


