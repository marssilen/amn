<?php
require_once('app/views/head.php'); ?>
<body>

<?php require_once('app/views/menu.php'); ?>
<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small"><?=$settings['about']?></span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium"><?=$settings['about']?></span><br>
    <span class="w3-large"><?=$settings['description']?></span>
    <p><a href="<?=URL?>page/2/درباره ی امن ایران" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">درباره ی ما</a></p>
  </div>
</header>
<div id="wrapper">
<div id="content">
<!-- Home Section -->
<div class="w3-container" style="padding:128px 16px" id="Home">
  <h3 class="w3-center">زمینه های کاری</h3>
  <div class="w3-row-padding" style="margin-top:64px">
	<?php foreach($data['cards'] as $card){?>
    <div class="w3-col l3 m6 w3-margin-bottom" style="">
	<div class="w3-card-2">
	  <div>
	  <img class="" src="<?= URL ?>public/upload/<?=$card['image']?>" alt="amnco" style="width: 100%">
	  </div>
	  <div class="w3-container size" style="position: relative">
      <h3><?=$card['title']?></h3>
          <hr class="w3-opacity"/>
      <p><?=$card['description']?></p>
	  <p style="margin: 16px">
	  <a id="readmore" class="w3-button w3-light-grey w3-block w3-center"
         style="position: absolute;bottom: 0px;left: 0px"
         href="<?=URL?>cat/<?=$card['url_cat'].'/&cat='.urlencode($card['title'])?>">بیشتر بخوانید</a>
	  </p>
	     
	  </div>
    </div>
	</div>
	<?php }?>
  </div>
</div>
<!-- Promo Section - "We know design" -->
<?php foreach($data['div'] as $div){?>
<div class="w3-container w3-dark-grey" style="padding:128px 0px">
    <div class="w3-row-padding">
        <div class="w3-col m6">
            <h3><?=$div['title']?></h3>
            <p><?=nl2br($div['description'])?></p>
            <p><a href="<?=URL?>cat/<?=$div['url_cat'].'/&cat='.urlencode($div['title'])?>" class="w3-button w3-black">ادامه</a></p>
        </div>
        <div class="w3-col m6">
            <img class="w3-image" src="<?= URL ?>public/upload/<?=$div['image']?>" alt="AMNCO" width="100%">
        </div>
    </div>
</div>
<?php }?>
<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h3 class="w3-center">اطلاعات تماس</h3>
    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-half">
            <!-- Add Google Maps -->
            <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>
        </div>
        <div class="w3-half">
			 <table style="width:100%">
  <tr>
    <td style="width:8px"><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i></td>
    <td><?=nl2br($settings['address'])?></td>
 
  </tr>
  <tr>
    <td><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i></td>
    <td><?=nl2br($settings['phone'])?></td>
   
  </tr>
</table> 
        </div>
    </div>
</div>
</div>
<?php
require_once ('app/views/footer.php');
?>
<!-- Add Google Maps -->
<script>
    myMap();
    function myMap()
    {
        myCenter=new google.maps.LatLng(32.664898, 51.701353);
        var mapOptions= {
            center:myCenter,
            zoom:12, scrollwheel: false, draggable: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

        var marker = new google.maps.Marker({
            position: myCenter,
        });
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
</div>
</body>
</html>
