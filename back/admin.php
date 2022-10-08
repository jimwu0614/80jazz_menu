<?php
$rows = $Admin->all();
?>
<div class=" right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                帳號管理
            </li>
        </ol>
    </nav>

    <!-- 表單 -->
    <div class="form_group">
        <div class="form_item form_item_Title">
            <div>
                <div class="form_item_header">
                    帳號管理
                </div>
                <div class="form_item_text" style="margin: 0;">
                    請輸入要更新的文字內容
                </div>
            </div>
            <div class="addBtn">

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
                    新增
                </button>

            </div>
        </div>



        <!-- data -->
        <div>
                <?php
                foreach ($rows as $key => $row) {
                ?>
                <div class="form_item_group">
                    <div class="form_item form_item_control">
                        <span class="form_item_num">第<?= $key + 1 ?>筆資料</span>
                        <div class="flex">
                            <div class="form_item_edit" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#editModal">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                            <div class="form_item_del" data-id="<?= $row['id'] ?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form_item">
                        <div class="form_item_text">帳號</div>
                        <input type="text" name="acc[]" value="<?= $row['acc'] ?>" class="form-control">
                    </div>
                    <div class="form_item">
                        <div class="form_item_text">密碼</div>
                        <input type="password" name="pw[]" value="<?= $row['pw'] ?>" class="form-control">
                    </div>
                </div>
                <?php
                }
                ?>

        </div>

        
    </div>


    <!-- add modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- modal-header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">新增帳號</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- modal-header end -->

                <!-- modal-body -->

                <div class="modal-body">
                    <div class="form-group">
                        <label for="acc" class="col-form-label">帳號</label>
                        <input type="text" class="form-control" id="acc" required>
                    </div>
                    <div class="form-group">
                        <label for="pw" class="col-form-label">密碼</label>
                        <input type="password" class="form-control" id="pw" required>
                    </div>
                </div>
                <!-- modal-body end -->

                <!-- modal-footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" id="addAdminBtn" onclick="reg()">確定新增</button>
                </div>
                <!-- modal-footer end -->
            </div>
        </div>
    </div>
    <!-- add modal end -->

    <!-- edit modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- modal-header -->
                <div class="modal-header">
                    <h5 class="modal-title" >修改密碼</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- modal-header end -->

                <!-- modal-body -->

                <div class="modal-body">
                    <div class="form-group">
                        <label for="acc" class="col-form-label">帳號</label>
                        <p id="editing_acc"></p>
                    </div>
                    <div class="form-group">
                        <label for="pw" class="col-form-label">密碼</label>
                        <input type="password" class="form-control" id="pw" required>
                    </div>
                </div>
                <!-- modal-body end -->

                <!-- modal-footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" id="addAdminBtn" onclick="reg()">確定修改</button>
                </div>
                <!-- modal-footer end -->
            </div>
        </div>
    </div>
    <!-- edit modal end -->

</div>
<script>
function reg() {

    let acc = $("#acc").val();
    let pw = $("#pw").val();
    if (acc == '' || pw == '') {
        Swal.fire({
            icon: 'error',
            title: '新增失敗',
            text: '資料不可為空!',
        })
    } else {
        $.post("./api/chkacc.php", {acc}, (res) => {
            if (res == 1) {
                Swal.fire({
                    icon: 'error',
                    title: '新增失敗',
                    text: '帳號重複!',
                })
            } else {
                $.post('./api/add_admin.php', {acc, pw}, (res2) => {
                    Swal.fire({
                        icon: 'success',
                        title: '新增成功',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    })

                })
            }

        })
    }

}

function edit() {
    
}
</script>