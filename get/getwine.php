<?php
include "../base.php";

$rows = $Wine->all(['type'=>$_POST['type'],'sh'=>1],"ORDER BY RANK ASC");
foreach ($rows as $key => $value) {
    ?>

    <tr data-type="wine" data-id="<?=$value['id']?>" data-bs-toggle="modal" data-bs-target="#detailModal" onclick="showmodal(this)">
        <td>
            <pre class="enlist"><?=$value['name']?></pre>
            <pre class="cnlist" style="display:none;"><?=$value['chinese']?></pre>
        </td>
        <td><pre><?=$value['bottle']?></pre></td>
    </tr>
    <?php
}
?>
