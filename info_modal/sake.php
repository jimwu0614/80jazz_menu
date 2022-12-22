<?php
include "../base.php";
$data = $Sake->find($_POST['itemid']);
$kind = $_POST['kind']
?>
<!-- Modal Header -->
<div class="modal-header">
    <h4 class="modal-title"><?=$data['name']?></h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
    <div class="flex_nowrap">
        <div class="w50 flex ai_c">
            <img class="itemModelPic" src="./img/menupic/sake/<?=$data['image']?>.jpg" alt="">
        </div>
        <div class="modalLine">
        </div>
        <div class="flexcol w45">
            <div class="modalItem"><?=$kind=='Sake'?'口味:':'原料:'?><br><?=$data['flavor']?></div>
            <br>
            <div class="modalItem">產地:<br><?=$data['land']?></div>
            <br>
            <div class="modalItem">介紹:<br><?=$data['intro']?></div>
        </div>
    </div>
</div>

<!-- Modal footer -->
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</div>