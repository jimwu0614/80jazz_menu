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
                <!-- 最上面控制區 -->
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
                <!-- 最上面控制區 end -->
                            


                <div class="form_item first_item">
                    <div class="form_item_text">品名</div>
                    <p><?= $row['name'] ?></p>
                </div>

                <div class="form_item">
                    <div class="form_item_text">產區</div>
                    <p><?= $row['land'] ?></p>
                </div>

                <div class="form_item">
                    <div class="form_item_text">焙度</div>
                    <p><?= $row['roast'] ?></p>
                </div>

                <div class="form_item">
                    <div class="form_item_text">價格</div>
                    <p><?= $row['price'] ?></p>
                </div>
                <div class="form_item">
                    <div class="form_item_text">簡介</div>
                    <p><?= $row['intro'] ?></p>
                </div>
                
                <input type="hidden" name="id" value="<?= $row['id'] ?>" data-id="<?= $row['id'] ?>">
            </div>

                <?php
                }
                ?>
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
                        <div class="form-group">
                            <label for="name" class="col-form-label">品名</label>
                            <input type="text"  class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="land" class="col-form-label">產區</label>
                            <input type="text" class="form-control" id="land">
                        </div>
                        <div class="form-group">
                            <label for="roast" class="col-form-label">焙度</label>
                            <input type="text" class="form-control" id="roast">
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-form-label">價格</label>
                            <input type="number" class="form-control" id="price">
                        </div>
                        <div class="form-group">
                            <label for="intro" class="col-form-label">簡介</label>
                            <textarea name="intro" id="intro" cols="40" rows="4"></textarea>
                            
                        </div>
                        <?php
                        $rank = $Beans->math('max','rank')+1
                        ?>
                            <input type="hidden" name="table" id="table" value="beans">
                            <input type="hidden" name="rank" id="rank" value="<?=$rank?>">
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
$('#addBtn').on('click', function() {
    let name = $('#name').val();
    let land = $('#land').val();
    let roast = $('#roast').val();
    let price = $('#price').val();
    let intro = $('#intro').val();
    let rank = $('#rank').val();
    let table = 'beans'

    // console.log(type);
    $.post('./api/add_menu.php', {name, land, roast, price, intro, rank, table}, () => {
        Swal.fire({
            icon: 'success',
            title: '新增成功',
            text: '成功新增一筆資料!',
            timer: 1500
        }).then((result) => {
            location.reload();
        })
    })
})


function edit(who) {
    let editid = $(who).data('id');
    $.post('./ajax/beans.php',{editid},(res)=>{
        $("#edit_modal_body").html(res)
    })
}
</script>