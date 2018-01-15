<?php
$title='لیست سوالات '.$data['title'];
$style='';
require_once('app/views/head.php');
?>
<body>
<div id="wrapper">
    <div id="divheader">
<?php require_once('app/views/menu.php'); ?>
    </div>
<div id="content">
<div class="container w3-row" style="margin-bottom:50px;padding: 50px">
    <div >
        <a href="<?=URL?>ask">بازگشت به صفحه ی سوالات</a>
        <h1 class="h1 w3-light-grey w3-padding"><?=$data['title']?></h1>
            <?php foreach ($data['data'] as $question){
                ?>
        <div class="w3-card-2 w3-padding w3-round w3-margin">
            <h6><?= convert_to_shamsi($question['date']) ?></h6>
            <div class="w3-col s10"><p><?=$question['ask'] ?></p></div>
            <div class="w3-col s2 w3-center"><img style="width: 100%;padding: 15px" src="<?=URL?>public/user.jpg"><?= $question['name']?></div>
        </div>
            <?php } ?>
        <form method="post" action="" class="form w3-card w3-padding w3-margin">
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="ایمیل" required class="form-control">
            </div>
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="نام خود را وارد کنید" required class="form-control">
            </div>
            <div class="form-group">
                <textarea type="text" id="subject" name="subject" placeholder="سوال" required class="form-control"></textarea>
            </div>
            <input type="submit" name="submit" value="ارسال" class="form-control">
        </form>
    </div>
</div>
</div>
<?php
require_once ('app/views/footer.php');
?>
</div>
</body>
</html>
