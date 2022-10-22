<?php
include "../base.php";

$rows = $Coffee->all(['type'=>$_POST['type'],'sh'=>1],"ORDER BY RANK ASC");
foreach ($rows as $key => $value) {
?>

<div class="mt-3 above">
    <span class="cn"><?=$value['chinese']?></span>
    <span class="jp" style="display:none;"><?=$value['japanese']?></span>
</div>
<div class="mt-1 under">
    <span class="en"><?=$value['name']?></span>
    <span class="price">$<?=$value['price']?></span>
</div>

<?php
}
?>
