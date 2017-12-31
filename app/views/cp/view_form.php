<div id="wrapper">
    <?php require_once('app/views/menu.php'); ?>
    <div id="content">
        <div class="container w3-row w3-card-2" style="padding: 25px">
            <div class="container">
                <h2>فرم مشخصات همکاران محترم</h2><h6><?=convert_to_shamsi($data['date']).','.$data['date']?></h6>
            </div>
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی:*</label>
                    <input value="<?=$data['name']?>" name="name" class="form-control" id="name" required="">
                </div>
                <div class="form-group">
                    <label for="company">نام شرکت:</label>
                    <input value="<?=$data['company']?>" name="company" class="form-control" id="company">
                </div>
                <div class="form-group">
                    <label for="cell">شماره همراه:*</label>
                    <input value="<?=$data['cell']?>" name="cell" class="form-control" id="cell" required>
                </div>
                <div class="form-group">
                    <label for="telegram">شماره تلگرام:</label>
                    <input value="<?=$data['telegram']?>" name="telegram" class="form-control" id="telegram">
                </div>
                <div class="form-group">
                    <label for="phone">شماره تلفن ثابت:*</label>
                    <input value="<?=$data['phone']?>" name="phone" class="form-control" id="phone" required>
                </div>
                <div class="form-group">
                    <label for="activity">زمینه فعالیت:</label>
                    <input value="<?=$data['activity']?>" name="activity" class="form-control" id="activity">
                </div>
                <div class="form-group">
                    <label for="brands">تا کنون با چه برند هایی کار کرده اید:</label>
                    <input value="<?=$data['brands']?>" name="brands" class="form-control" id="brands">
                </div>
                <div class="form-group">
                    <?php if($data['card']!=''){?>
                        <label for="card">کارت تبلیغاتی</label>
                        <a href="<?=URL?>public/cards/<?= $data['card']?>"><img src="<?=URL?>public/cards/<?= $data['card']?>" style="max-width: 200px"/></a>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="address">آدرس محل فعالیت:</label>
                    <textarea name="address" class="form-control" rows="5" id="address"><?=$data['address']?></textarea>
                </div>
<!--                <button type="submit" name="submit" class="btn btn-default">ارسال مشخصات</button>-->
        </div>
    </div>
</div>
