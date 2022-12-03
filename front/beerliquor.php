<div class="langBox_page">
    <input type="checkbox" class="checkbox" id="chk_page">
    <label class="langLabel" for="chk_page">
        <img class="flag" src="https://img.icons8.com/emoji/48/000000/taiwan-emoji.png" />
        <img class="flag" src="https://img.icons8.com/emoji/48/000000/united-states-emoji.png"/>
        <div class="ball"></div>
    </label>
</div>
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