<?php
include "../base.php";
$data = $Cocktail->find($_POST['editid']);

?>

<div class="form-group flex ">
    <div class="pt-4 ml-4">
        <select name="type" id="type">
            <option value="">---</option>
            <option value="Classic" <?= ($data['type'] == 'Classic') ? 'selected' : '' ?>>Classic</option>
            <option value="Signature" <?= ($data['type'] == 'Signature') ? 'selected' : '' ?>>Signature</option>
        </select>
    </div>
</div>
<div class="form-group flex">
    <div>
        <label for="name" class="col-form-label">品項</label>
        <input type="text" name="name" class="form-control" id="name" value="<?= $data['name'] ?>">
    </div>
    <div>
        <label for="chinese" class="col-form-label">中文</label>
        <input type="text" name="chinese" class="form-control" id="chinese" value="<?= $data['chinese'] ?>">
    </div>
</div>
<div class="form-group flex_nowrap">
    <div>
        <label for="base" class="col-form-label">基底酒</label>
        <input type="text" class="form-control" id="base" value="<?= $data['base'] ?>">
    </div>
    <div>
        <label for="intro" class="col-form-label">簡介</label>
        <textarea name="intro" id="intro" cols="20" rows="3"><?= $data['intro'] ?></textarea>
    </div>
</div>
<div class="form-group flex">
    <div>
        <label for="ingredient" class="col-form-label">材料</label>
        <textarea name="ingredient" id="ingredient" cols="20" rows="3"><?= $data['ingredient'] ?></textarea>
    </div>
    <div>
        <label for="step" class="col-form-label">步驟</label>
        <textarea name="step" id="step" cols="20" rows="3"><?= $data['step'] ?></textarea>
    </div>
</div>
<div class="form-group flex">
    <div>
        酒感
        <select name="feel" id="feel">
            <option <?= ($data['feel'] == '★★★★★') ? 'selected' : '' ?> value="★★★★★">★★★★★</option>
            <option <?= ($data['feel'] == '★★★★☆') ? 'selected' : '' ?> value="★★★★☆">★★★★☆</option>
            <option <?= ($data['feel'] == '★★★☆☆') ? 'selected' : '' ?> value="★★★☆☆">★★★☆☆</option>
            <option <?= ($data['feel'] == '★★☆☆☆') ? 'selected' : '' ?> value="★★☆☆☆">★★☆☆☆</option>
            <option <?= ($data['feel'] == '★☆☆☆☆') ? 'selected' : '' ?> value="★☆☆☆☆">★☆☆☆☆</option>
            <option <?= ($data['feel'] == '☆☆☆☆☆') ? 'selected' : '' ?> value="☆☆☆☆☆">☆☆☆☆☆</option>
        </select>
    </div>
    <div>
        酸度
        <select name="acidity" id="acidity">
            <option <?= ($data['acidity'] == '★★★★★') ? 'selected' : '' ?> value="★★★★★">★★★★★</option>
            <option <?= ($data['acidity'] == '★★★★☆') ? 'selected' : '' ?> value="★★★★☆">★★★★☆</option>
            <option <?= ($data['acidity'] == '★★★☆☆') ? 'selected' : '' ?> value="★★★☆☆">★★★☆☆</option>
            <option <?= ($data['acidity'] == '★★☆☆☆') ? 'selected' : '' ?> value="★★☆☆☆">★★☆☆☆</option>
            <option <?= ($data['acidity'] == '★☆☆☆☆') ? 'selected' : '' ?> value="★☆☆☆☆">★☆☆☆☆</option>
            <option <?= ($data['acidity'] == '☆☆☆☆☆') ? 'selected' : '' ?> value="☆☆☆☆☆">☆☆☆☆☆</option>
        </select>
    </div>
    <div>
        甜度
        <select name="sweet" id="sweet">
            <option <?= ($data['sweet'] == '★★★★★') ? 'selected' : '' ?> value="★★★★★">★★★★★</option>
            <option <?= ($data['sweet'] == '★★★★☆') ? 'selected' : '' ?> value="★★★★☆">★★★★☆</option>
            <option <?= ($data['sweet'] == '★★★☆☆') ? 'selected' : '' ?> value="★★★☆☆">★★★☆☆</option>
            <option <?= ($data['sweet'] == '★★☆☆☆') ? 'selected' : '' ?> value="★★☆☆☆">★★☆☆☆</option>
            <option <?= ($data['sweet'] == '★☆☆☆☆') ? 'selected' : '' ?> value="★☆☆☆☆">★☆☆☆☆</option>
            <option <?= ($data['sweet'] == '☆☆☆☆☆') ? 'selected' : '' ?> value="☆☆☆☆☆">☆☆☆☆☆</option>
        </select>
    </div>
</div>
<div class="form-group flex">
    <div>
        <label for="web" class="col-form-label">參考網站</label>
        <input type="text" class="form-control" id="web" value="<?= $data['web'] ?>">
    </div>
</div>


<input type="hidden" name="table" id="table" value="cocktail">
<input type="hidden" name="id" value="<?= $data['id'] ?>">