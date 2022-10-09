<?php
include "../base.php";
$data = $Admin->find($_POST['editid']);

?>
    <div class="form-group">
        <label for="acc" class="col-form-label">帳號</label>
        <p id="editing_acc"><?=$data['acc']?></p>
    </div>
    <div class="form-group">
        <label for="pw" class="col-form-label">密碼</label>
        <input type="password" name="pw" class="form-control" id="pw" value="<?=$data['pw']?>">
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <input type="hidden" name="table" value="admin">
    </div>