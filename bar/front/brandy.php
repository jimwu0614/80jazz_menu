<div class="brandy"></div>
<div class="box">
    <div class="liquortitle">
        <span class="type active">Cognac</span>
        <!-- <span class="type">Armagnac</span> -->
    </div>
    <div class="blur">
        <table class="w100 ">
            <tr>
                <td class="w60"></td>
                <td class="w20">Glass/<br>杯</td>
                <td class="w20">Bottle/<br>瓶</td>
            </tr>
            <tbody class="tbody">

            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function(){
        $.post("./api/getbrandy.php", {type:'Cognac'}, (res) => {

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

        $.post("./api/getbrandy.php", {type}, (res) => {
            $(".tbody").html(res)
        })
    })


</script>