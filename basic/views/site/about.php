<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Gallery';
$this->params['breadcrumbs'][] = $this->title;
$imageArray = array('https://scontent-mia1-1.cdninstagram.com/t51.2885-15/e35/10012485_1677464125864461_1361149865_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/10268797_205134676495437_724554966_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/10349791_903639666399440_1099776187_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/10349822_1783407055220224_406883715_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/10601690_913274558779858_1982225416_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/10644073_535947186574871_794068686_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/10725130_1677691972484752_1305267452_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/10831855_1704007799885434_2107941669_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/e15/11260440_1060640077341484_1590149058_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/11351650_223592868001611_84915930_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/11372177_174792749575690_487519316_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/11410409_1532905083686919_1507974008_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/1170152_1505868406386074_137875722_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/11934864_1578714875776224_1905300099_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12346238_1060843863955149_399108175_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12353192_1666035193664814_908688001_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12354107_457119787823063_43761354_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/e15/12356452_189969541352073_477949156_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12357412_1700000583551522_1658999689_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12357674_1732272793672586_1808403691_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12357753_529348823892113_107249149_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12393876_1650112025230927_97667705_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12394163_790705427702732_124555224_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12407488_492356830972688_2058301761_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12424551_169637290063569_1384327652_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/e15/12424614_869059649880540_382967832_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12479532_566391690179405_1395153406_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12501542_494141317438634_1248255030_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12501923_979689078746046_1335775918_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12523632_970583646347777_1465766376_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12501589_1005362202873751_1139839745_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12530722_909270679187108_59612639_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12543364_181440262217828_1464117191_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12545312_1503758176597092_1679958637_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12543173_208599662825466_1802983211_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12545335_1661450150762199_172548005_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12552496_164691557230061_1220687025_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12558637_967864179934904_1892292990_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12568289_1689184948004071_1024422108_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12568312_575647395932387_1325465013_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12677442_1055565384512136_181826212_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12628019_1501951736778089_374380678_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12716836_565959703566707_287849913_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12783477_1256039341090790_248908467_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12797843_1731259457160582_780259397_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12826075_668782806593860_155981501_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/l/t51.2885-15/s640x640/sh0.08/e35/12918020_1074076365985263_2089151_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12930930_1537410249895244_692326238_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12935136_236067970093040_1327410069_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/e15/12965632_1105215899528602_1575575265_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12976228_656038227885123_978461689_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/12976577_1112161285491601_1180894021_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13129314_1735977023311140_1902250871_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13130058_1400151730292264_527335457_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13151039_154228831646609_904306851_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13151302_1176777499007579_677709390_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13166917_1417398308286183_332697985_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13183330_779511912149802_915636567_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13248678_697176490424170_769840452_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13249648_281815655494211_147972952_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13259113_1149198715102588_1871482620_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13266729_1602312453430920_627957120_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13385898_289106204810669_669678216_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13388735_151894075219808_1998065017_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13392620_480128108863265_1544114559_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/13422842_1052170048171693_1665923595_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/e35/13551638_1731466737112902_1908875591_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/1388815_885395014908822_2036368426_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/1516340_990722314323161_1950302857_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/914706_483061851865662_1787539242_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/918186_128608077514316_318161830_n.jpg',
                'https://scontent-mia1-1.cdninstagram.com/t51.2885-15/s640x640/sh0.08/e35/929321_155787311462176_1383367454_n.jpg');

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <?php foreach($imageArray as $image): ?>
        <div class="col-xs-6 col-md-3">
          <a href="/site/detail" class="thumbnail">
              <img src=<?= $image ?> alt="...">
          </a>
        </div>
        <?php endforeach ?>
    </div>

    <code><?= __FILE__ ?></code>
</div>
