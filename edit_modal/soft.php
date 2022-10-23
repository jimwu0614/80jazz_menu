<?php
include "../base.php";
$data = $Soft->find($_POST['editid']);

?>

<div class="form-group flex" style="justify-content: space-evenly;">


</div>
<div class="form-group flex">
    <div>
        <label for="name" class="col-form-label">品名</label>
        <input name="name" type="text" class="form-control" id="name" value="<?= $data['name'] ?>">
    </div>
    <div>
        <label for="chinese" class="col-form-label">中文</label>
        <input name="chinese" type="text" class="form-control" id="chinese" value="<?= $data['chinese'] ?>">
    </div>
</div>
<div class="form-group flex_nowrap">
    <div>
        <label for="inprice" class="col-form-label">進價</label>
        <input name="inprice" type="number" class="form-control" id="inprice" value="<?= $data['memo'] ?>">
    </div>
    <div>
        <label for="inputtime" class="col-form-label">報價時間</label>
        <input name="inputtime" type="date" class="form-control" id="inputtime" value="<?= $data['inputtime'] ?>">
    </div>
    <div>
        <label for="supply" class="col-form-label">廠商</label>
        <input name="supply" type="text" class="form-control" id="supply" value="<?= $data['supply'] ?>">
    </div>
</div>
<div class="form-group flex">
    <div>
        <label for="price" class="col-form-label">價格</label>
        <input name="price" type="number" class="form-control" id="price" value="<?= $data['price'] ?>">
    </div>
    <div>
        <label for="promo" class="col-form-label">促銷</label>
        <textarea name="promo" id="promo" cols="20" rows="3"> <?= $data['promo'] ?></textarea>
    </div>
</div>
<div class="form-group flex">
    <div>
        <label for="memo" class="col-form-label">Memo</label>
        <input name="memo" type="text" class="form-control" id="memo" value="<?= $data['memo'] ?>">
    </div>

</div>


<input type="hidden" name="table" id="table" value="soft">
<input type="hidden" name="id" value="<?= $data['id'] ?>">