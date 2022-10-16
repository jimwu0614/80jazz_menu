<?php
include "../base.php";
$data = $Beans->find($_POST['editid']);

?>

<div class="form-group">
    <label for="name" class="col-form-label">品名</label>
    <input name="name" value="<?=$data['name']?>" type="text" class="form-control" id="name">
</div>
<div class="form-group">
    <label for="land" class="col-form-label">產區</label>
    <input name="land" value="<?=$data['land']?>" type="text" class="form-control" id="land">
</div>
<div class="form-group">
    <label for="roast" class="col-form-label">焙度</label>
    <input name="roast" value="<?=$data['roast']?>" type="text" class="form-control" id="roast">
</div>
<div class="form-group">
    <label for="price" class="col-form-label">價格</label>
    <input name="price" value="<?=$data['price']?>" type="number" class="form-control" id="price">
</div>
<div class="form-group">
    <label for="intro" class="col-form-label">簡介</label>
    <textarea name="intro" id="intro" cols="25" rows="4"><?=$data['intro']?></textarea>

</div>

<input type="hidden" name="id" value="<?= $data['id'] ?>">
<input type="hidden" name="table" value="beans">