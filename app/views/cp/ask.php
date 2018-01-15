 <table class="table table-striped">
    <thead>
      <tr>
        <th>شناسه فرم</th>
        <th>تاریخ</th>
        <th>&ensp;</th>
        <th>&ensp;</th><th>&ensp;</th><th>وضعیت انتشار</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $form){?>
      <tr>
        <td><?= $form['id'] ?></td>
        <td><?= convert_to_shamsi($form['date']).' '.$form['date'] ?></td>
        <td><a href="<?= URL.'cp/view_question/'.$form['id'] ?>">مشاهده<a></td>
          <td><a href="<?=LINK?>" onclick="document.getElementById('form_id').value='<?=$form['id']?>';document.getElementById('delete_modal').style.display='block'">حذف<a></td>
          <td><a href="<?=LINK?>" onclick="document.getElementById('vform_id').value='<?=$form['id']?>';document.getElementById('v_modal').style.display='block'">تایید<a></td>
          <td><span class="w3-badge w3-yellow"><?=($form['public']==0)?'جدید':'منتشر شده'?></span></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

 <div class="w3-modal" id="delete_modal">
     <!-- Modal content-->
     <div class="modal-content center" style="max-width: 800px">
         <div class="modal-header">
             <button class="close" onclick="document.getElementById('delete_modal').style.display='none';">&times;</button>
             <h4 class="modal-title">حذف شود؟</h4>
         </div>
         <div class="modal-body">
             <form method="post" action="">
                 <input type="hidden" name="id" id="form_id">
                 <button type="submit" name="delete" class="btn btn-default">حذف</button>
                 <button type="button" onmousedown="return false;" onclick="document.getElementById('delete_modal').style.display='none';" class="btn btn-default">لغو</button>
             </form>
         </div>
     </div>
 </div>
 <div class="w3-modal" id="v_modal">
     <!-- Modal content-->
     <div class="modal-content center" style="max-width: 800px">
         <div class="modal-header">
             <button class="close" onclick="document.getElementById('v_modal').style.display='none';">&times;</button>
             <h4 class="modal-title">تایید شود؟</h4>
         </div>
         <div class="modal-body">
             <form method="post" action="">
                 <input type="hidden" name="id" id="vform_id">
                 <button type="submit" name="ver" class="btn btn-default">تایید</button>
                 <button type="button" onmousedown="return false;" onclick="document.getElementById('v_modal').style.display='none';" class="btn btn-default">لغو</button>
             </form>
         </div>
     </div>
 </div>