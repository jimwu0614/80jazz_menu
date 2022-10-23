<div class="beerliquor"></div>
<div class="box">
    <div class="liquortitle">
        <span class="type active">Beer</span>
        <span class="type">liquor</span>

    </div>
    <div class="blur">
        <table class="w100" id="table">

        </table>
    </div>
</div>
<script>
    $(document).ready(function(){
        $.post("./get/getbeerliquor.php", {type:'Beer'}, (res) => {

            $("#table").html(res)
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

        $.post("./get/getbeerliquor.php", {type}, (res) => {
            $("#table").html(res)
        })
    })


</script>