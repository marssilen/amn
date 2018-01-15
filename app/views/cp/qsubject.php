<form method="post" action="" class="form-inline">
    <input type="text" id="subject" name="subject" placeholder="سوال" required class="form-control">
    <input type="submit" name="submit" value="ایجاد موضوع جدید" class="form-control">
</form>
 <table class="table table-striped w3-margin-top">
    <thead>
      <tr>
        <th>شناسه</th>
        <th>موضوع</th>
        <th>&ensp;</th>
        <th>&ensp;</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $form){?>
      <tr>
        <td><?= $form['id'] ?></td>
        <td><?= $form['subject'] ?></td>
        <td><a href="<?= URL.'ask/question/'.$form['id'] ?>">مشاهده سوالات<a></td>
          <td><a href="<?=LINK?>" onclick="document.getElementById('form_id').value='<?=$form['id']?>';document.getElementById('delete_modal').style.display='block'">حذف<a></td>
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