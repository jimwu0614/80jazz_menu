<div class="right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                Coffee Beans
            </li>
        </ol>
    </nav>

    <div class="form_group">
        <div class="form_item form_item_Title">
            <div>
                <div class="form_item_header">
                    Coffee Beans
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
        $rows = $Beans->all("ORDER BY `rank` ASC");
        foreach ($rows as $key => $row) {
        ?>
            <div class="form_item_group">
                <div class="form_item form_item_control">
                    <span class="form_item_num">第<?= $key + 1 ?>筆資料</span>
                    <div class="form_item_btns">
                        <span class="form_item_smtitle">排序</span>
                        <div class="order_btn" data-order="<?= $row['rank'] ?>" data-id="<?= $row['id'] ?>">
                            <button type="button" class="btn btn-outline-primary order_upbtn">上</button>
                            <button type="button" class="btn btn-outline-primary order_bnbtn">下</button>
                        </div>
                        <div class="form_item_sh">
                            <span class="form_item_smtitle">上架</span>
                            <div class="sh_bg <?= ($row['sh'] == 1) ? 'sh_show' : '' ?>" data-id="<?= $row['id'] ?>">
                                <div class="sh_btn <?= ($row['sh'] == 1) ? 'sh_btn_show' : '' ?>"></div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="form_item_edit" data-id="<?=$row['id']?>" data-toggle="modal" data-target="#editModal" onclick="edit(this)">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                            <div class="form_item_del" data-id="<?=$row['id']?>">
                                <i class="fa-solid fa-trash-can"></i>
                            </div>
                        </div>
                            
                    </div>

                </div>

                <div class="form_item first_item">
                    <div class="form_item_text">英文</div>
                    <p><?= $row['name'] ?></p>
                </div>

                <div class="form_item">
                    <div class="form_item_text">中文</div>
                    <p><?= $row['chinese'] ?></p>
                </div>

                <div class="form_item">
                    <div class="form_item_text">日文</div>
                    <p><?= $row['japanese'] ?></p>
                </div>

                <div class="form_item">
                    <div class="form_item_text">價格</div>
                    <p><?= $row['price'] ?></p>
                </div>
                
                <input type="hidden" name="id" value="<?= $row['id'] ?>" data-id="<?= $row['id'] ?>">
            </div>

                <?php
                }
                ?>
            <input type="hidden" name="table" id="table" value="coffee">
         </div>
        <!-- data end -->
    </div>


    <!-- addmodal -->
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
                            <option value="Coffee">Coffee</option>
                            <option value="Cocktail">Coffee cocktail</option>
                            <option value="Tea">Tea</option>
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
                        <?php
                        $rank = $Coffee->math('max','rank')+1
                        ?>
                            <input type="hidden" class="form-control" id="rank" value="<?=$rank?>">
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
    <!-- addmodal end -->


    <!-- edit modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h5 class="modal-title" >修改商品</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
            <form action="./api/update.php" method="post">

                <div class="modal-body" id="edit_modal_body">

                    <!-- Ajax在這邊顯示 -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary" >確定修改</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- edit modal end -->

</div>
<script>
    // resume_add
$('.form_group').on('click', '#addBtn', function() {
    let type = $('#type').val();
    let name = $('#name').val();
    let chinese = $('#chinese').val();
    let japanese = $('#japanese').val();
    let price = $('#price').val();
    let rank = $('#rank').val();
    let table = 'Coffee'

    // console.log(type);
    $.post('./api/add_menu.php', {type, name, chinese, japanese, price, rank, table}, () => {
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


function edit(who) {
    let editid = $(who).data('id');
    $.post('./ajax/coffee.php',{editid},(res)=>{
        $("#edit_modal_body").html(res)
    })
}
</script>