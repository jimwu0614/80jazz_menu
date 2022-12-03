<?php
include "../base.php";

$rows = $Wine->all(['type'=>$_POST['type'],'sh'=>1],"ORDER BY RANK ASC");
foreach ($rows as $key => $value) {
    ?>

    <tr>
        <td>
            <pre data-type="wine" data-id="<?=$value['id']?>" class="enlist"><?=$value['name']?></pre>
            <pre data-type="wine" data-id="<?=$value['id']?>" class="cnlist" style="display:none;"><?=$value['chinese']?></pre>
        </td>
        <td><pre><?=$value['bottle']?></pre></td>
    </tr>
    <?php
}
?>
