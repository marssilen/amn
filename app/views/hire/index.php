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
                <h2>فرم استخدام</h2>
            </div>
            <form method="post" action="">
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی:*</label>
                    <input name="name" class="form-control" id="name" required="">
                </div>
                <div class="form-group">
                    <label for="birth">تاریخ تولد:*</label>
                    <input name="birth" class="form-control" id="birth" required>
                </div>
                <div class="form-group">
                    <label for="phone">شماره تلفن همراه:*</label>
                    <input name="phone" class="form-control" id="phone" required>
                </div>
                <div class="form-group">
                    <label for="married">وضعیت تاهل:*</label>
                    <select name="married" required>
                        <option value="متاهل">متاهل</option>
                        <option value="مجرد">مجرد</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="intro">معرف</label>
                    <input name="intro" class="form-control" id="intro">
                </div>

                <div class="form-group">
                    <label for="address">آدرس:*</label>
                    <textarea name="address" class="form-control" rows="5" id="address" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-default">تایید</button>
            </form>
        </div>
    </div>
    <?php
    require_once ('app/views/footer.php');
    ?>
</div>

</body>
</html>
