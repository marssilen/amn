<div id="wrapper">
    <?php require_once('app/views/menu.php'); ?>
    <div id="content">
        <div class="container w3-row w3-card-2" style="padding: 25px">
            <div class="container">
               <h6><?=convert_to_shamsi($data['date'])?></h6>
            </div>
            <p>
                <?=$data['ask']?>
            </p>
            <form method="post" action="">
            <div class="form-group">
                <textarea name="answer" class="form-control" rows="5" id="answer" required></textarea>
            </div>
                <input type="hidden" name="ask" value="<?=$data['ask']?>">
                <input type="hidden" name="id" value="<?=$data['id']?>">
                <button type="submit" name="submit" class="btn btn-default">ارسال پاسخ</button>
            </form>
        </div>
    </div>
</div>
