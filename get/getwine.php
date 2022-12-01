<?php
include "../base.php";

$rows = $Wine->all(['type'=>$_POST['type'],'sh'=>1],"ORDER BY RANK ASC");
foreach ($rows as $key => $value) {
    ?>

    <tr>
        <td><pre data-type="wine" data-id="<?=$value['id']?>"><?=$value['name']?></pre></td>
        <td><pre><?=$value['bottle']?></pre></td>
    </tr>
    <?php
}
?>
