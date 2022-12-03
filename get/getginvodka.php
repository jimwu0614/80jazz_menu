<?php
include "../base.php";

$rows = $Ginvodka->all(['type'=>$_POST['type'],'sh'=>1],"ORDER BY RANK ASC");
foreach ($rows as $key => $value) {
    ?>

    <tr>
        <td>
            <pre data-type="ginvodka" data-id="<?=$value['id']?>" class="enlist"><?=$value['name']?></pre>
            <pre data-type="ginvodka" data-id="<?=$value['id']?>" class="cnlist" style="display:none;"><?=$value['chinese']?></pre>
        </td>

<?php
        if ($value['glass']==0) {
?>
        <td class="crossed"><pre></pre></td>
<?php    
        }else{
?>
        <td><pre><?=$value['glass'];?></pre></td>
<?php    
        }
?>

        <td><pre><?=$value['bottle']?></pre></td>
    </tr>
    <?php
}
?>
