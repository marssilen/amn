<?php
$title=$data['data']['name'];
require_once('app/views/head.php');
?>
<body>
<?php require_once('app/views/menu.php'); ?>

<div class="container w3-row w3-card-2" style="margin-top: 75px;margin-bottom:50px;padding: 50px">
<!--    <div id="match1" class="w3-col m4 s12 pad">-->
<!--        <img id="imgmatch" style="width:100%" src="--><?//= URL.'public/upload/'.$data['data']['card_image']?><!--"/>-->
<!--    </div>-->
<!--    w3-col m8 s12-->
    <div id="match2" class="pad" style="padding: 14px">
        <h3 class="w3-round w3-light-grey w3-center" style="padding: 5px"><?php if (!empty($data['data']['name'])){?><?= $data['data']['name']?><?php } ?></h3>
        <p>
            <?= $data['data']['long_description'] ?>
        </p>
        <div>
            <?php foreach ($data['tags'] as $tag){?>
                <a href="<?=URL.'tag/&tag='.$tag['tag']?>"><span class="tag"><?= $tag['tag']?></span></a>
            <?php } ?>
        </div>
    </div>
</div>
<?php
require_once ('app/views/footer.php');
?>
<script>
    var imgheight=$("#imgmatch").height();
    var m1height=$("#match2").innerHeight();
    if(imgheight>m1height) {
        $("#match2").innerHeight(imgheight);
    }else{
        $("#match1").innerHeight(m1height);
    }
</script>
</body>
</html>
