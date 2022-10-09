<div class="right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                Coffee
            </li>
        </ol>
    </nav>

    <div class="form_group">
        <div class="form_item form_item_Title">
                <div>
                    <div class="form_item_header">
                        Coffee
                    </div>
                </div>
                <div class="addBtn">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
                        新增
                    </button>
                </div>
            </div>
            
            <!-- modal -->
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- modal-header -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">新增品項</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- modal-header end -->
                        
                        <!-- modal-body -->
                        <div class="modal-body">
                            <form>
                                <select name="type" id="type">
                                    <option value="coffee">Coffee</option>
                                    <option value="special">Special coffee</option>
                                    <option value="tea">Tea</option>
                                </select>
                                <div class="form-group">
                                    <label for="name" class="col-form-label">英文</label>
                                    <input type="text"  class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="chinese" class="col-form-label">中文</label>
                                    <input type="text" class="form-control" id="chinese">
                                </div>
                                <div class="form-group">
                                    <label for="japanese" class="col-form-label">日文</label>
                                    <input type="text" class="form-control" id="japanese">
                                </div>
                                <div class="form-group">
                                    <label for="price" class="col-form-label">價格</label>
                                    <input type="number" class="form-control" id="price">
                                </div>
                                <div class="form-group">
                                    <label for="intro" class="col-form-label">文字描述</label>
                                    <textarea class="form-control" id="intro"></textarea>
                                </div>
                            </form>
                        </div>
                        <!-- modal-body end -->
                        
                        <!-- modal-footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                            <button type="button" class="btn btn-primary" id="addBtn">確定新增</button>
                        </div>
                        <!-- modal-footer end -->
                        
                    </div>
                </div>
            </div>
            <!-- modal end -->
            
            <!-- form -->
            <form action="./api/resume.php" method="post">
            <!-- data -->
            <div>
                <?php
                
                $rows = $Coffee->all("ORDER BY `rank` DESC");
                foreach ($rows as $key => $row) {
                ?>
                    <div class="form_item_group">

                        <div class="form_item form_item_control">
                            <span class="form_item_num">第<?= $key + 1 ?>筆資料</span>

                            <div class="form_item_btns">
                                <span class="form_item_smtitle">排序</span>
                                <div class="order_btn" data-order="<?= $row['order_num'] ?>" data-id="<?= $row['id'] ?>">
                                    <button type="button" class="btn btn-outline-primary order_upbtn">上</button>
                                    <button type="button" class="btn btn-outline-primary order_bnbtn">下</button>
                                </div>

                                <div class="form_item_sh">
                                    <span class="form_item_smtitle">顯示</span>
                                    <div class="sh_bg <?= ($row['sh'] == 1) ? 'sh_show' : '' ?>" data-id="<?= $row['id'] ?>">
                                        <div class="sh_btn <?= ($row['sh'] == 1) ? 'sh_btn_show' : '' ?>"></div>
                                    </div>
                                </div>
                                <div class="form_item_del" data-id="<?= $row['id'] ?>">
                                    <i class="fa-solid fa-trash-can"></i>
                                </div>
                            </div>

                        </div>
                        <div class="form_item">
                            <div class="form_item_text">品名</div>
                            <input type="text" name="title[]" value="<?= $row['title'] ?>" class="form-control">
                        </div>
                        <div class="form_item">
                            <div class="form_item_text">就讀期間</div>
                            <input type="text" name="during[]" value="<?= $row['during'] ?>" class="form-control">
                        </div>
                        <div class="form_item">
                            <div class="form_item_text">文字描述</div>
                            <textarea name="text[]" class="form-control" cols="30" rows="10" style="height: 160px;"><?= $row['text'] ?></textarea>
                        </div>
                        <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                    </div>

                <?php
                }
                ?>
            </div>
            <!-- data end -->

            <!-- update btn -->
            <div class="form_item form_item_Btn">
                <input type="hidden" name="table" id="table" value="<?=$_GET['do']?>">
                <button type="submit" class="btn btn-primary">更新</button>
            </div>
            <!-- update btn end -->

        </div>
    </form>
    <!-- form end -->


</div>
<script>
    // resume_add
$('.form_group').on('click', '#addBtn', function() {
    let type = $('#type').val();
    let name = $('#name').val();
    let chinese = $('#chinese').val();
    let japanese = $('#japanese').val();
    let price = $('#price').val();
    let table = 'Coffee'

    console.log(type);
    $.post('./api/add_menu.php', {type, name, chinese, japanese, price, table}, () => {
        Swal.fire({
            icon: 'success',
            title: '新增成功',
            text: '成功新增一筆資料!',
        }).then((result) => {
            if (result.isConfirmed) {
                location.reload();
            }
        })
    })
})
</script>