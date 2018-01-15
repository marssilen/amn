<div id="wrapper">
    <?php require_once('app/views/menu.php'); ?>
    <div id="content">
        <div class="container w3-row w3-card-2" style="padding: 25px">
            <div class="container">
                <h2>فرم استخدام</h2><h6><?=convert_to_shamsi($data['date']).','.$data['date']?></h6>
            </div>
            <div class="form-group">
                <label for="name">نام و نام خانوادگی:*</label>
                <input value="<?=$data['name']?>" name="name" class="form-control" id="name" required="">
            </div>
            <div class="form-group">
                <label for="birth">تاریخ تولد:</label>
                <input value="<?=$data['birth']?>" name="birth" class="form-control" id="birth">
            </div>
            <div class="form-group">
                <label for="phone">شماره تلفن همراه:*</label>
                <input value="<?=$data['phone']?>" name="phone" class="form-control" id="phone" required>
            </div>
            <div class="form-group">
                <label for="married">وضعیت تاهل:</label>
                <input value="<?=$data['married']?>" name="married" class="form-control" id="married">
<!--                <select name="married">-->
<!--                    <option value="متاهل">متاهل</option>-->
<!--                    <option value="مجرد">مجرد</option>-->
<!--                </select>-->
            </div>
            <div class="form-group">
                <label for="intro">معرف</label>
                <input value="<?=$data['intro']?>" name="intro" class="form-control" id="intro">
            </div>

            <div class="form-group">
                <label for="address">آدرس محل فعالیت:</label>
                <textarea name="address" class="form-control" rows="5" id="address"><?=$data['address']?></textarea>
            </div>
            <form method="post" action="<?=URL?>cp/hire">
                <input type="hidden" name="id" id="vform_id" value="<?=$data['id']?>">
                <button type="submit" name="ver" class="btn btn-default">تایید</button>
            </form>
        </div>
    </div>
</div>
