<?php
include "../base.php";
$data = $Coffee->find($_POST['editid']);

?>
    <select name="type" id="type">
        <option value="" >---</option>
        <option value="Coffee" <?=($data['type']=='Coffee')?'selected':''?>>Coffee</option>
        <option value="Cocktail" <?=($data['type']=='Cocktail')?'selected':''?>>Coffee Cocktail</option>
        <option value="Tea" <?=($data['type']=='Tea')?'selected':''?>>Tea</option>
    </select>
    <div class="form-group">
        <label for="name" class="col-form-label">英文</label>
        <input type="text" name="name" class="form-control" id="name" value="<?=$data['name']?>">
    </div>
    <div class="form-group">
        <label for="chinese" class="col-form-label">中文</label>
        <input type="text" name="chinese" class="form-control" id="chinese" value="<?=$data['chinese']?>">
    </div>
    <div class="form-group">
        <label for="japanese" class="col-form-label">日文</label>
        <input type="text" name="japanese" class="form-control" id="japanese" value="<?=$data['japanese']?>">
    </div>
    <div class="form-group">
        <label for="price" class="col-form-label">價格</label>
        <input type="number" name="price" class="form-control" id="price" value="<?=$data['price']?>">
    </div>

    <input type="hidden" name="id" value="<?=$data['id']?>">
    <input type="hidden" name="table" value="coffee">