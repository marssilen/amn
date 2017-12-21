<?php
$title=$data['cat'];
$desc="شرکت امنیران,".$data['cat'];;
require_once('app/views/head.php'); ?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
<?php
//require_once('app/views/header.php');
?>
<div id="content" style="margin-top: 10px">
    <div class="w3-card-2 w3-hide-large">
                <button id="show_catMenu_btn" onmousedown="return false" class="btn btn-primary">نمایش دسته بندی ها</button>
        <div class="w3-hide" id="top_cat">
            <h6 style="font-family: 'yekan'">دسته بندی ها</h6>
            <ul>
                <?php
                $margin=0;
                if(!empty($data['cats']))
                    foreach ($data['cats'] as $cat){
                        foreach ($cat as $ca) {$margin+=5;
                            ?>
                            <li style="margin-right: <?=$margin?>px"><a href="<?= URL.'cat/'.$ca ['id'].'/1/'.$ca ['cat'] ?>" style="font-weight: bold;font-size: 15px"><span class="glyphicon glyphicon-triangle-bottom" style="font-size: 8px;margin-left: 5px"></span><?= $ca ['cat'] ?></a></li>
                            <?php
                        }
                    }?>
                <?php
                foreach ($data['child'] as $child){
                    ?>
                    <li style="margin-right: <?=$margin?>px"><a href="<?=URL.'cat/'.$child['id'].'/1/'.$child['cat']?>"><?=$child['cat']?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <script>
        $("#show_catMenu_btn").click(function () {
            $("#top_cat").toggleClass("w3-hide");
        });
    </script>
<div class="w3-row" style="padding: 10px;margin-top: 10px;margin-bottom: 10px">
    <div class="w3-col l9 w3-white w3-card-2 w3-padding" style="overflow: hidden">
    <div>
        <p>
        <a class="grey" href=""><h3 style="display: inline"> شرکت امن ایران</h3></a>
            <a class="grey" href=""><?=$data['cat']?></a>
            <a class="grey" href="">...</a>
        </p>
        <p>
            <span style="font-size: large"><?=$data['cat']?></span>
            <span class="w3-text-gray">(نمایش <?=($data['page']-1)*24+1?>-<?=($data['page']-1)*24+count($data['items'])?> از <?=$data['count']?>)</span>
        </p>
        <p class="sort">
            مرتب سازی بر اساس:
            <a href="">پربازدید ترین ها</a>
            <a href="">جدیدترین ها</a>
        </p>
        <hr>
    </div>
    <?php foreach ($data['items'] as $item) {?>
        <div class="w3-col l3 m4 s12" style="padding: 5px">
            <div class="img_c w3-border w3-hover-border-blue">
                <a href="<?=URL?>page/<?=$item['id'].'/'.urlencode($item['name'])?>">
                <img src="<?= URL ?>public/upload/<?=$item['card_image']?>" alt="AMN IRAN SHOP" style="width: 100%;max-height: 533px">
                </a>
                <p class="w3-center" style="margin-top: 10px;height:20px;overflow: hidden">
                    &ensp;<?=$item['name']?>
                </p>
            </div>
        </div>
    <?php } ?>
    </div>
    <div class="w3-col l3 w3-hide-small w3-hide-medium">
        <div class="w3-card-2 w3-margin-left w3-padding">
        <h6 style="font-family: 'yekan'">دسته بندی ها</h6>
            <ul>
                <?php
                $margin=0;
                if(!empty($data['cats']))
                foreach ($data['cats'] as $cat){
                    foreach ($cat as $ca) {$margin+=5;
                        ?>
                        <li style="margin-right: <?=$margin?>px"><a href="<?= URL.'cat/'.$ca ['id'].'/1/'.$ca ['cat'] ?>" style="font-weight: bold;font-size: 15px"><span class="glyphicon glyphicon-triangle-bottom" style="font-size: 8px;margin-left: 5px"></span><?= $ca ['cat'] ?></a></li>
                        <?php
                    }
                }?>
                <?php
                foreach ($data['child'] as $child){
                ?>
                    <li style="margin-right: <?=$margin?>px"><a href="<?=URL.'cat/'.$child['id'].'/1/'.$child['cat']?>"><?=$child['cat']?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="w3-white w3-padding-16">
<div class="container w3-center">
  <?=$data['pview']?>
</div>
</div>
</div>
<?php
require_once ('app/views/footer.php');
?>
</div>
</body>
</html>
