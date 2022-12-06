<?php
include "../base.php";
$data = $Wine->find($_POST['itemid']);
?>
<!-- Modal Header -->
<div class="modal-header">
    <h4 class="modal-title"><?=$data['name']?></h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
    <div class="flex_nowrap">
        <div class="w50">
            <img class="itemModelPic" src="./img/menupic/wine/<?=$data['image']?>.jpg" alt="">
        </div>
        <div class="modalLine">
        </div>
        <div class="flexcol">
            <div class="modalItem">產區:<br><?=$data['from']?></div>
            <br>
            <div class="modalItem">介紹:<br><?=$data['intro']?></div>
        </div>
    </div>
</div>

<!-- Modal footer -->
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</div>