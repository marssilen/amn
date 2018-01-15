<?php
$menu_list=$this->model('Menu_m')->get_menu();
?>
<div class="w3-bar w3-white w3-card-2">
<div class="container" id="myNavbar">
    <a href="<?=URL?>" class="w3-bar-item w3-button w3-wide"><img src="<?=URL?>public/logo.jpg" height="30"></a>
    <div class="w3-right w3-hide-small">
	<?php if(!$this->is_login){ ?>
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
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<div class="container" style="position: relative">

    <?php foreach($menu_list as $menu){
         if($menu['parent']=='0'){ ?>
            <div id="menu_<?=$menu['id']?>" onmouseover="document.getElementById('menu_<?=$menu['id']?>').style.display='block'"
                 onmouseleave="document.getElementById('menu_<?=$menu['id']?>').style.display='none'" class="w3-card-2 w3-white"
                 style="display:none; z-index: 15;position: absolute;width: 100%;border-bottom-left-radius:4px;border-bottom-right-radius:4px;background: url(<?=URL?>public/upload/<?=$menu['back']?>) 0px 0px/100% 100%;">
                <div class="w3-col m3 w3-right"><?php for($i=0;$i<count($menu_list);$i+=4){$list=$menu_list[$i];?>
                        <?php if($list['parent']==$menu['id']){ ?><ul><h6 class="w3-text-blue">
                            <a href="<?=$list['href']?>"><?=$list['menu']?></a></h6><?php foreach($menu_list as $item){?>
                                <?php if($item['parent']==$list['id']){ ?><li><a href="<?=$item['href']?>"><?= $item['menu'] ?></a></li><?php }} ?>
                            </ul><?php }} ?>
                </div>
            <div class="w3-col m3 w3-right"><?php for($i=1;$i<count($menu_list);$i+=4){$list=$menu_list[$i];?>
                    <?php if($list['parent']==$menu['id']){ ?><ul><h6 class="w3-text-blue">
                        <a href="<?=$list['href']?>"><?=$list['menu']?></a></h6><?php foreach($menu_list as $item){?>
                            <?php if($item['parent']==$list['id']){ ?><li><a href="<?=$item['href']?>"><?= $item['menu'] ?></a></li><?php }} ?>
                        </ul><?php }} ?>
            </div>
            <div class="w3-col m3 w3-right"><?php for($i=2;$i<count($menu_list);$i+=4){$list=$menu_list[$i];?>
                    <?php if($list['parent']==$menu['id']){ ?><ul><h6 class="w3-text-blue">
                        <a href="<?=$list['href']?>"><?=$list['menu']?></a></h6><?php foreach($menu_list as $item){?>
                            <?php if($item['parent']==$list['id']){ ?><li><a href="<?=$item['href']?>"><?= $item['menu'] ?></a></li><?php }} ?>
                        </ul><?php }} ?>
            </div>
            <div class="w3-col m3 w3-right"><?php for($i=3;$i<count($menu_list);$i+=4){$list=$menu_list[$i];?>
                    <?php if($list['parent']==$menu['id']){ ?><ul><h6 class="w3-text-blue">
                        <a href="<?=$list['href']?>"><?=$list['menu']?></a></h6><?php foreach($menu_list as $item){?>
                            <?php if($item['parent']==$list['id']){ ?><li><a href="<?=$item['href']?>"><?= $item['menu'] ?></a></li><?php }} ?>
                        </ul><?php }} ?>
            </div>
            </div>
             <?php } ?>

    <?php } ?>
</div>
<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-right w3-hide-medium w3-hide-large" style="z-index: 50;display:none;overflow-y:scroll;margin-bottom: 100px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16"> &times;</a>
        <?php if(!$this->is_login){ ?>
			<a href="<?= URL ?>login" onclick="w3_close()" class="w3-bar-item w3-button w3-right-align">وارد شوید</a>
        <?php }else{
            $m=$this->model('Page_m');
            $fid=$m->get_factor(Session::get('id'));
            ?>
			<a href="<?= URL ?>cp/items/" onclick="w3_close()" class="w3-bar-item w3-button"> مدیریت کاربری</a>
			<a href="<?= URL ?>cp/logout/" onclick="w3_close()" class="w3-bar-item w3-button"> خروج</a>
        <?php }
        echo menu($menu_list,0);
        ?>
    <a class="w3-bar-item w3-button"> &ensp;</a>
  <script>
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}
function w3_close() {
    mySidebar.style.display = "none";
}
  </script>
</nav>
  
