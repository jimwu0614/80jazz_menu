<?php
include "../base.php";
$data = $Cocktail->find($_POST['itemid']);
?>
<!-- Modal Header -->
<div class="modal-header">
    <h4 class="modal-title"><?=$data['name']?></h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
    <!-- <div class="w60"><img src="" alt=""></div> -->
    
</div>

<!-- Modal footer -->
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</div>