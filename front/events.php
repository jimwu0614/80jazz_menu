<div class="centered body">
    <div class="centered body">
        <div class="box">
            <div class="liquortitle">
                <span class="type active">Tips</span>
                <span class="type">Opening</span>
                <span class="type">Cocktails</span>
            </div>
            <div class="blur">
                <div class="pic">
                    <img src="./img/rules.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        // $.post("./get/getwhiskey.php", {type:'Single'}, (res) => {

        //     $(".tbody").html(res)
        // })
    })

    $(".type").on("click",function(){
        let cancel = $(".active");
        cancel.removeClass("active");

        let add = $(this);
        // console.log(add);
        add.addClass("active");

        let type = $(this).text();
        // console.log(type);

        // $.post("./get/getwhiskey.php", {type}, (res) => {
        //     $(".tbody").html(res)
        // })
    })


</script>

