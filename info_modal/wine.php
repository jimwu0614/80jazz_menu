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
    <!-- <div class="w60"><img src="" alt=""></div> -->
    <div class="w90 ma linehigh">
        <img class="itemModelPic" src="./img/menupic/wine/<?=$data['image']?>.jpg" alt="">
    </div>
    <!-- <div class="w80 ma flex_nowrap jc mt-3">
        <div class="flexcol">
            <div><p class="m-0">酒感/</p><span>Strong</span></div>
            <div><?=$data['feel']?></div>
        </div>
        <div class="flexcol">
            <div><p class="m-0">酸度/</p><span>Acidity</span></div>
            <div><?=$data['acidity']?></div>
        </div>
        <div class="flexcol">
            <div><p class="m-0">甜度/</p><span>Sweetness</span></div>
            <div><?=$data['sweet']?></div>
        </div>
    </div> -->


</div>

<!-- Modal footer -->
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</div>