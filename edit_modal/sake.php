<?php
include "../base.php";
$data = $Sake->find($_POST['editid']);

?>
                  
<div class="form-group flex" style="justify-content: space-evenly;">
    <div class="pt-4">
    <select name="type" id="type">
        <option value="" >---</option>
        <option value="Sake" <?=($data['type']=='Sake')?'selected':''?>>Sake</option>
        <option value="Shochu" <?=($data['type']=='Shochu')?'selected':''?>>Shochu</option>
    </select>  
    </div>
</div>
<div class="form-group flex">
    <div>
        <label for="name" class="col-form-label">品名</label>
        <input name="name" type="text" class="form-control" id="name" value="<?=$data['name']?>">
    </div>
    <div>
        <label for="memo"  class="col-form-label">Memo</label>
        <input name="memo" type="text" class="form-control" id="memo" value="<?=$data['memo']?>">
    </div>
</div>
<div class="form-group flex_nowrap">
    <div>
        <label for="inprice" class="col-form-label">進價</label>
        <input name="inprice" type="number"  class="form-control" id="inprice" value="<?=$data['memo']?>">
    </div>
    <div>
        <label for="inputtime" class="col-form-label">報價時間</label>
        <input name="inputtime"  type="date"  class="form-control" id="inputtime" value="<?=$data['inputtime']?>">
    </div>
    <div>
        <label for="supply" class="col-form-label">廠商</label>
        <input name="supply"  type="text"  class="form-control" id="supply" value="<?=$data['supply']?>">
    </div>
</div>
<div class="form-group flex">
    <div>
        <label for="bottle" class="col-form-label">整瓶</label>
        <input name="bottle"  type="number"  class="form-control" id="bottle" value="<?=$data['bottle']?>">
    </div>
    <div>
        <label for="glass" class="col-form-label">單杯</label>
        <input name="glass"  type="number"  class="form-control" id="glass" value="<?=$data['glass']?>">
    </div>
</div>
<div class="form-group flex">
    <div>
        <label for="intro" class="col-form-label">簡介</label>
        <textarea name="intro" id="intro" cols="20" rows="3"> <?=$data['intro']?></textarea>
    </div>
    <div>
        <label for="promo" class="col-form-label">促銷</label>
        <textarea name="promo" id="promo" cols="20" rows="3"> <?=$data['promo']?></textarea>
    </div>
</div>


    <input type="hidden" name="table" id="table" value="beerliquor">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
