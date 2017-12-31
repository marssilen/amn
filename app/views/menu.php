<?php
$menu_list=$this->model('Menu_m')->get_menu();
?>
<div class="w3-bar w3-white w3-card-2">
<div class="container" id="myNavbar">
    <a href="<?=URL?>" class="w3-bar-item w3-button w3-wide"><img src="<?=URL?>public/logo.jpg" height="30"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
	<?php if(!$this->is_login){ ?>
<!--			<a href="--><?//= URL ?><!--login" class="w3-right w3-bar-item w3-button">وارد شوید</a>-->
        <?php }else{
            $m=$this->model('Page_m');
            $fid=$m->get_factor(Session::get('id'));
            ?>
			<a href="<?= URL ?>cp/items/" class="w3-right w3-bar-item w3-button"> مدیریت کاربری</a>
			<a href="<?= URL ?>cp/logout/" class="w3-right w3-bar-item w3-button"> خروج</a>
        <?php } ?>
	  <?php foreach($menu_list as $menu){ ?>
        <?php if($menu['parent']=='0'){ ?>
		<a href="<?=$menu['href']?>" class="w3-right w3-bar-item w3-button" onmouseover="document.getElementById('menu_<?=$menu['id']?>').style.display='block'" onmouseleave="document.getElementById('menu_<?=$menu['id']?>').style.display='none'"><?= $menu['menu'] ?></a>
        <?php } ?>
      <?php } ?>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<div class="container" style="position: relative">

    <?php foreach($menu_list as $menu){ ?><?php if($menu['parent']=='0'){ ?><div id="menu_<?=$menu['id']?>" onmouseover="document.getElementById('menu_<?=$menu['id']?>').style.display='block'" onmouseleave="document.getElementById('menu_<?=$menu['id']?>').style.display='none'" class="w3-light-gray w3-card-2" style="display:none; z-index: 15;position: absolute;width: 100%;border-bottom-left-radius:4px;border-bottom-right-radius:4px"><?php foreach($menu_list as $list){?><?php if($list['parent']==$menu['id']){ ?><ul class="w3-col m3 w3-right" style="display: inline-block"><h6 class="w3-text-red"><a href="<?=$list['href']?>"><?=$list['menu']?></a></h6><?php foreach($menu_list as $item){?><?php if($item['parent']==$list['id']){ ?><li><a href="<?=$item['href']?>"><?= $item['menu'] ?></a></li><?php }} ?></ul><?php }} ?></div><div style="clear: both"></div> <?php } ?><?php } ?>

</div>
<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-right w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16"> &times;</a>
  <?php foreach($menu_list as $menu){ ?>
        <?php if($menu['parent']=='0'){ ?>
		<a href="<?=$menu['href']?>" onclick="w3_close()" class="w3-bar-item w3-button"><?= $menu['menu'] ?></a>
        <?php } ?>
    <?php } ?>
        <?php if(!$this->is_login){ ?>
			<a href="<?= URL ?>login" onclick="w3_close()" class="w3-bar-item w3-button">وارد شوید</a>
        <?php }else{
            $m=$this->model('Page_m');
            $fid=$m->get_factor(Session::get('id'));
            ?>
			<a href="<?= URL ?>cp/items/" onclick="w3_close()" class="w3-bar-item w3-button"> مدیریت کاربری</a>
			<a href="<?= URL ?>cp/logout/" onclick="w3_close()" class="w3-bar-item w3-button"> خروج</a>
        <?php } ?>
  <script>
  
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
  </script>
</nav>
  
