<?php
include "../base.php";

$rows = $Sake->all(['type'=>$_POST['type'],'sh'=>1],"ORDER BY RANK ASC");
foreach ($rows as $key => $value) {
    ?>

    <tr>
        <td><pre data-type="sake" data-kind="<?=$value['type']?>" data-id="<?=$value['id']?>" data-bs-toggle="modal" data-bs-target="#detailModal" onclick="showmodal(this)"><?=$value['name']?></pre></td>

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
