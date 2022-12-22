<div class="sake"></div>
<div class="box">
    <div class="liquortitle">
        <span class="type active">Sake</span>
        <span class="type">Shochu</span>

    </div>
    <div class="blur">
        <table class="w100 ">
            <tr>
                <td class="w60"></td>
                <td class="w20">Glass/<br>壺/杯<br></td>
                <td class="w20">Bottle/<br>瓶</td>
            </tr>
            <tbody class="tbody">

            </tbody>
        </table>
    </div>
</div>

<!-- detail modal -->
<div class="modal fade" id="detailModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content front_modal_body">

        <!-- ajax顯示在這裡 -->

        </div>
    </div>
</div>
<!-- detail modal end -->
<script>
    $(document).ready(function(){
        $.post("./get/getsake.php", {type:'Sake'}, (res) => {

            $(".tbody").html(res)
        })
    })

    $(".type").on("click",function(){
        let cancel = $(".active");
        cancel.removeClass("active");

        let add = $(this);
        // console.log(add);
        add.addClass("active");

        let type = $(this).text();
        // console.log(type);

        $.post("./get/getsake.php", {type}, (res) => {
            $(".tbody").html(res)
        })
    })

    function showmodal(who) {
        let itemid = $(who).data('id');
        let kind = $(who).data('kind');
        
        $.post('./info_modal/sake.php',{itemid,kind},(res)=>{
            // console.log(res);
            $(".front_modal_body").html(res)
        })
    }

</script>