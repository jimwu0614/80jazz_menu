// resume sh
$(".sh_bg").click(function() {
    if ($(this).css('justify-content') == 'start') {
        $(this).removeClass('sh_show');
        $(this).children().removeClass('sh_btn_show');
        
        let table = $('#table').val();

        let sh = 0;
        let id = $(this).data('id');

        $.post('./api/showhide.php', {id,sh,table}, (res) => {
            // console.log(res);
            // location.reload();
        })

    } else {

        $(this).addClass('sh_show');
        $(this).children().addClass('sh_btn_show');

        let table = $('#table').val();

        let sh = 1;
        let id = $(this).data('id');

        $.post('./api/showhide.php', {id,sh,table}, (res) => {
            // console.log(res);
            // location.reload();
        })
    }
})