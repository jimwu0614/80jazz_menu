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
                <td class="w50"><pre class="item_name" data-type="cocktail" data-id="<?=$value['id']?>" data-bs-toggle="modal" data-bs-target="#detailModal"><?=$value['name']?></pre></td>
                <td class="w50"><pre><?=$value['chinese']?></pre></td>
            </tr>
        <?php
        }
        ?>
            </tbody>
        </table>
    </div>

        <!-- detail modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                  Modal body..
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- detail modal end -->

</div>
<script>
    // $(".item_name").on("click",function () {
    //     let gg = $(this).data('id')
    //     console.log(gg);
    // })
</script>