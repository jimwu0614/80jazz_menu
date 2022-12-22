<div class="langBox_page">
    <input type="checkbox" class="checkbox" id="chk_page">
    <label class="langLabel" for="chk_page">
        <img class="flag" src="https://img.icons8.com/emoji/48/000000/taiwan-emoji.png" />
        <img class="flag" src="https://img.icons8.com/emoji/48/000000/united-states-emoji.png"/>
        <div class="ball"></div>
    </label>
</div>
<div class="wine"></div>
<div class="box">
    <div class="liquortitle">
        <span class="type active">Red</span>
        <span class="type">White</span>
        <span class="type">Sparkling</span>
    </div>
    <div class="blur">
        <table class="w80 ma">
            <tr>
                <td class="w70"></td>
                <td class="w30">Bottle/<br>瓶</td>
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
        $.post("./get/getwine.php", {type:'Red'}, (res) => {

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

        $.post("./get/getwine.php", {type}, (res) => {
            $(".tbody").html(res)
        })
    })

    function showmodal(who) {
        let itemid = $(who).data('id');
        
        $.post('./info_modal/wine.php',{itemid},(res)=>{
            // console.log(res);
            $(".front_modal_body").html(res)
        })
    }

</script>