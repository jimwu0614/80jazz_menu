<div class="cocktail"></div>
<div class="speech_bubble_liquer" id='bubble'>點擊品項可以看到酒款簡介唷</div>
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
            <tr data-type="cocktail" data-id="<?=$value['id']?>" data-bs-toggle="modal" data-bs-target="#detailModal" onclick="showmodal(this)">
                <td class="w50"><pre class="item_name" data-type="cocktail" data-id="<?=$value['id']?>"><?=$value['name']?></pre></td>
                <td class="w50"><pre><?=$value['chinese']?></pre></td>
            </tr>
        <?php
        }
        ?>
            </tbody>
        </table>
    </div>

        <!-- detail modal -->
    <div class="modal fade" id="detailModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" id="front_modal_body">

            <!-- ajax顯示在這裡 -->

            </div>
        </div>
    </div>
    <!-- detail modal end -->

</div>
<script>
function showmodal(who) {
    let itemid = $(who).data('id');
    $.post('./info_modal/cocktail.php',{itemid},(res)=>{
        $("#front_modal_body").html(res)
    })
}
</script>