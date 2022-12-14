// resume del
$('.form_item_del').click(function() {
    let id = $(this).data('id');
    let table = $('#table').val();
        
    Swal.fire({
        title: '確定要刪除嗎?',
        text: "刪除後將無法復原此筆資料!",
        icon: 'warning',
        showCancelButton: true,
        reverseButtons: true,
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
        cancelButtonText: '取消',
        confirmButtonText: '確定刪除!',
    }).then((result) => {
        if (result.isConfirmed) {

            $.post('./api/del.php',{id,table},(res)=>{
                
                console.log(res);

                Swal.fire(
                    '成功刪除',
                    '你成功刪除了一筆資料',
                    'success'
                ).then((result) => {
                    if (result.isConfirmed) {
                                
                        location.reload();
                    }
                })

            })
                    

        }
    })
})