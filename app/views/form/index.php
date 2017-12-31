<?php
$title='فرم مشخصات همکاران محترم-امنیران';
$style='';
require_once('app/views/head.php');
?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
<div id="content">
<div class="container w3-row w3-card-2" style="margin-top: 75px;margin-bottom:50px;padding: 50px">
    <div class="container">
        <h2>فرم مشخصات همکاران محترم</h2>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">نام و نام خانوادگی:*</label>
            <input name="name" class="form-control" id="name" required="">
        </div>
        <div class="form-group">
            <label for="company">نام شرکت:</label>
            <input name="company" class="form-control" id="company">
        </div>
        <div class="form-group">
            <label for="cell">شماره همراه:*</label>
            <input name="cell" class="form-control" id="cell" required>
        </div>
        <div class="form-group">
            <label for="telegram">شماره تلگرام:</label>
            <input name="telegram" class="form-control" id="telegram">
        </div>
        <div class="form-group">
            <label for="phone">شماره تلفن ثابت:*</label>
            <input name="phone" class="form-control" id="phone" required>
        </div>
        <div class="form-group">
            <label for="activity">زمینه فعالیت:</label>
            <input name="activity" class="form-control" id="activity">
        </div>
        <div class="form-group">
            <label for="brands">تا کنون با چه برند هایی کار کرده اید:</label>
            <input name="brands" class="form-control" id="brands">
        </div>
        <div class="form-group">
            <label for="card">لطفا کارت تبلیغاتی خود را آپلود کنید:</label>
            <input name="card" type="file" class="form-control-file" id="card">
        </div>

        <div class="form-group">
            <label for="address">آدرس محل فعالیت:</label>
            <textarea name="address" class="form-control" rows="5" id="address"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-default">ارسال مشخصات</button>
    </form>
</div>
</div>
<?php
require_once ('app/views/footer.php');
?>
</div>
</body>
</html>
