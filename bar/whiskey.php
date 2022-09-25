<div class="whiskey ">
    <div class="liquortitle">
        <span class="type single active">Single</span>
        <span class="type blended">Blended</span>
        <span class="type bourbon">Bourbon</span>
    </div>
    <div class="blur">
        <table class="w100 ">
            <tr>
                <td class="w60"></td>
                <td class="w20">Glass/杯</td>
                <td class="w20">Bottle/瓶</td>
            </tr>
            <tbody class="tbody">

            </tbody>

        </table>
    </div>

</div>
<script>
    $(document).ready(function(){
        $.post("./api/getwhiskey.php", {type:'Single'}, (res) => {

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
        console.log(type);

        $.post("./api/getwhiskey.php", {type}, (res) => {
            $(".tbody").html(res)
        })
    })


</script>