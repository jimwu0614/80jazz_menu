<div class="cocktail"></div>
<div class="box">
    <div class="liquortitle">
        <span class="type active">
            <h3 class="chinese">所有經典調酒均一價 $350</h3>
            <h3>All Classic Cocktails For NTD $350</h3>
        </span>
    </div>
    <div class="blur">
        <table class="w100 ">
            <tbody class="tbody">
        <?php
        $rows = $Cocktail->all(['sh'=>1]);
        foreach ($rows as $key => $value) {
        ?>
            <tr>
                <td class="w50"><pre><?=$value['name']?></pre></td>
                <td class="w50"><pre><?=$value['chinese']?></pre></td>
            </tr>
        <?php
        }
        ?>
            </tbody>
        </table>
    </div>
</div>
<script>


</script>