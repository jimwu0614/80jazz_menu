<?php
include "../base.php";

$rows = $Rumteq->all(['type'=>$_POST['type'],'sh'=>1],"ORDER BY RANK ASC");
foreach ($rows as $key => $value) {
    ?>

    <tr>
        <td><pre><?=$value['name']?></pre></td>

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
