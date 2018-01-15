<?php
$title='لیست سوالات';
$style='';
require_once('app/views/head.php');
?>
<body>
<div id="wrapper">
<?php require_once('app/views/menu.php'); ?>
<div id="content">
<div class="container w3-row w3-card-2" style="margin-top: 10px;margin-bottom:50px;padding: 50px">
    <div class="container">
        <h2>لیست سوالات</h2>
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
