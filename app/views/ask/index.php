<?php
$title='لیست سوالات';
$style='';
require_once('app/views/head.php');
?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
<div id="content">
<div class="container w3-row w3-card-2" style="margin-top: 75px;margin-bottom:50px;padding: 50px">
    <div class="container">
        <h2>لیست سوالات</h2>
        <form method="post" action="" class="form-inline">
            <input type="hidden" id="name" name="name" placeholder="نام خود را وارد کنید" required class="form-control"><br>
            <input type="email" id="email" name="email" placeholder="ایمیل" required class="form-control">
            <input type="text" id="subject" name="subject" placeholder="سوال" required class="form-control">
            <input type="submit" name="submit" value="ایجاد موضوع جدید" class="form-control">
        </form>
        <ul>
            <?php foreach ($data as $question){ ?>
        <li>
            <a href="<?= URL.'ask/question/'.$question['id'] ?>"><h4><?= $question['subject'] ?></h4></a>
        </li>
            <?php } ?>
        </ul>
    </div>
</div>
</div>
<?php
require_once ('app/views/footer.php');
?>
</div>
</body>
</html>
