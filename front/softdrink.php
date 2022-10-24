<div class="softdrink"></div>
<div class="box">
    <div class="liquortitle">
        <span class="type active">Softdrink</span>
    </div>
    <div class="blur">
        <table class="w100 ">
            <tr>
                <td class="w70"></td>
                <td class="w30"></td>
            </tr>
            <tbody class="tbody">
    <?php
            $rows = $Soft->all(['sh'=>1]);
            foreach ($rows as $key => $value) {
    ?>

            <tr>
                <td><pre><?=$value['name']?></pre></td>
                <td><pre><?=$value['price']?></pre></td>
            </tr>
    <?php
}
?>
            </tbody>
        </table>
    </div>
</div>
