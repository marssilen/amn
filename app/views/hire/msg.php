<?php
require_once('app/views/head.php'); ?>
<body>
<div id="wrapper">
    <?php require_once('app/views/menu.php'); ?>
    <div id="content">
        <div style="max-width:1000px;margin: auto;" class="w3-margin-top w3-card-2 w3-container w3-round w3-padding-48">
            <p class="w3-center">
              <?= print_r($data['data'])?>
            </p>
        </div>
    </div>
</div>
</body>
</html>
