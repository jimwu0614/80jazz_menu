<?php
include "../base.php";
echo "<div style='display: none;'>";
dd($_POST['type']);
echo "</div>";

if ($_POST['type']=='Beer') {
?>
<tr>
    <td class="w55"></td>
    <td class="w20">Bottle/<br>瓶</td>
    <td class="w25">6 Bottle/<br>組</td>
</tr>
<tbody class="tbody">
<?php
$rows = $Beerliquor->all(['type'=>$_POST['type'],'sh'=>1],"ORDER BY RANK ASC");
foreach ($rows as $key => $value) {
    ?>

    <tr>
        <td><pre data-type="beer" data-id="<?=$value['id']?>"><?=$value['name']?></pre></td>
        <td><pre><?=$value['glass']?></pre></td>
        <td><pre><?=$value['bottle']?></pre></td>
    </tr>
    <?php
}
?>     
</tbody>
<?php
} else if ($_POST['type']=='liquor') {
?>
<tr>
    <td class="w60"></td>
    <td class="w20">Glass/<br>杯</td>
    <td class="w20">Bottle/<br>瓶</td>
</tr>
<tbody class="tbody">

<?php
$rows = $Beerliquor->all(['type'=>'liquor']);
foreach ($rows as $key => $value) {
    ?>

    <tr>
        <td><pre data-type="liquor" data-id="<?=$value['id']?>"><?=$value['name']?></pre></td>

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
</tbody>
<?php
}
?>


