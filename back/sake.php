<div class="right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                Sake&Shochu
            </li>
        </ol>
    </nav>

    <div class="form_group">
        <div class="form_item form_item_Title">
            <div>
                <div class="form_item_header">
                    Sake&Shochu
                </div>
            </div>
            <div class="form_item_Title_middle">
                <a href="?do=sake&type=Sake"  class="title_type <?=($_GET['type']=='Sake')?'liquor_active':''?>">Sake</a>
                <a href="?do=sake&type=Shochu" class="title_type <?=($_GET['type']=='Shochu')?'liquor_active':''?>">Shochu</a>
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
        $rows = $Sake->all(['type'=>$_GET['type']],"ORDER BY `rank` ASC");
        foreach ($rows as $key => $row) {
        ?>
            <div class="form_item_group flex pr-3">
                <div class="form_item form_item_control w100">
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

                <div class="w60 mt-3 flex">
                    <div class="form_item flex w100 jc">
                        <div>
                            <div class="form_item_text">分類</div>
                            <p><?= $row['type'] ?></p>
                        </div>
                        <div>
                            <div class="form_item_text">Memo</div>
                            <p><?= $row['memo'] ?></p>
                        </div>
                    </div>
                    
                    <div class="form_item flex w100 jc">
                        <div>
                            <div class="form_item_text">品項</div>
                            <p><?= $row['name'] ?></p>
                        </div>
                    </div>

                    <div class="form_item flex w100 jc">
                        <div>
                            <div class="form_item_text">進價</div>
                            <p><?= $row['inprice'] ?></p>
                        </div>
                        <div>
                            <div class="form_item_text">報價時間</div>
                            <p><?= $row['inputtime'] ?></p>
                        </div>
                        <div>
                            <div class="form_item_text">廠商</div>
                            <p><?= $row['supply'] ?></p>
                        </div>
                    </div>
                    <div class="form_item flex w100 jc">
                        <div>
                            <div class="form_item_text">整瓶</div>
                            <p><?= $row['bottle'] ?></p>
                        </div>
                        <div>
                            <div class="form_item_text">單杯</div>
                            <p><?= $row['glass'] ?></p>
                        </div>
                    </div>
                    <div class="form_item flex w100 jc">
                        <div>
                            <div class="form_item_text">簡介</div>
                            <p><?= $row['intro'] ?></p>
                        </div>

                    </div>
                </div>
                <div class="my-3 w40 redd " >
                    照片預覽放這邊
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
                        <div class="form-group flex" style="justify-content: space-evenly;">
                            <div class="pt-4">
                                <?php
                                if ($_GET['type']=="Sake") {
                                ?>
                                <label class="col-form-label">分類</label>
                                <p id="type">Sake</p>
                                <?php                                    
                                } else {
                                ?>
                                <label class="col-form-label">分類</label>
                                <p id="type">Shochu</p>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group flex">
                            <div>
                                <label for="name" class="col-form-label">品項</label>
                                <textarea name="name" id="name" cols="25" rows="2" class="form-control"></textarea>
                            </div>
                            <div>
                                <label for="memo"  class="col-form-label">Memo</label>
                                <input type="text" name="memo" class="form-control" id="memo">
                            </div>
                        </div>
                        <div class="form-group flex_nowrap">
                            <div>
                                <label for="inprice" class="col-form-label">進價</label>
                                <input type="number" name="inprice" class="form-control" id="inprice" value="0">
                            </div>
                            <div>
                                <label for="inputtime" class="col-form-label">報價時間</label>
                                <input type="date" name="inputtime" class="form-control" id="inputtime" value="<?=date('Y-m-d')?>">
                            </div>
                            <div>
                                <label for="supply" class="col-form-label">廠商</label>
                                <input type="text" name="supply" class="form-control" id="supply">
                            </div>
                        </div>
                        <div class="form-group flex">
                            <div>
                                <label for="bottle" class="col-form-label">整瓶</label>
                                <input type="number" name="bottle" class="form-control" id="bottle" value="0">
                            </div>
                            <div>
                                <label for="glass" class="col-form-label">單杯</label>
                                <input type="number" name="glass" class="form-control" id="glass" value="0">
                            </div>
                        </div>
                        <div class="form-group flex">
                            <div>
                                <label for="intro" class="col-form-label">簡介</label>
                                <textarea name="intro" id="intro" cols="20" rows="3"></textarea>
                            </div>

                        </div>

                        <?php
                        $rank = $Sake->math('max','rank',['type'=>$_GET['type']])+1
                        ?>
                            <input type="hidden" name="table" id="table" value="sake">
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
                
            <form action="./api/edit.php" method="post">

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
    let type = $('#type').text();
    let memo = $('#memo').val();
    let name = $('#name').val();
    let inprice = $('#inprice').val();
    let inputtime = $('#inputtime').val();
    let supply = $('#supply').val();
    let bottle = $('#bottle').val();
    let glass = $('#glass').val();
    let intro = $('#intro').val();

    
    let rank = $('#rank').val();
    let table = $('#table').val();

    $.post('./api/add_menu.php', {type, memo, name, inprice, inputtime, supply, bottle, glass, intro, rank, table}, (res) => {
        // console.log(res);
        Swal.fire({
            icon: 'success',
            title: '新增成功',
            text: '成功新增一筆資料!',
            timer: 1500
        }).then((result) => {
            // console.log(res);
            location.reload();

        })
    })
})


function edit(who) {
    let editid = $(who).data('id');
    $.post('./edit_modal/sake.php',{editid},(res)=>{
        $("#edit_modal_body").html(res)
    })
}
</script>