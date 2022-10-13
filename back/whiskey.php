<div class="right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                Whiskey
            </li>
        </ol>
    </nav>

    <div class="form_group">
        <div class="form_item form_item_Title">
            <div>
                <div class="form_item_header">
                    Whiskey
                </div>
            </div>
            <div class="form_item_Title_middle">
                <a href="#">Single</a>
                <a href="">Blended</a>
                <a href="">Bourbon</a>
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
        $rows = $Whiskey->all("ORDER BY `rank` ASC");
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
                        <div>
                            <div class="form_item_text">中文</div>
                            <p><?= $row['chinese'] ?></p>
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
                        <div>
                            <div class="form_item_text">促銷</div>
                            <p><?= $row['promo'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="my-3 w40 redd " >
                    照片放這邊
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
                        <div class="form-group flex ">
                            <div class="pt-4 ml-4">
                                <select name="type" id="type">
                                    <option value="Single">Single</option>
                                    <option value="Blended">Blended</option>
                                    <option value="Bourbon">Bourbon</option>
                                </select>
                            </div>
                            <div style="margin-left: 5rem;">
                                <label for="memo"  class="col-form-label">Memo</label>
                                <input type="text" class="form-control" id="memo">
                            </div>
                        </div>
                        <div class="form-group flex">
                            <div>
                                <label for="name" class="col-form-label">品項</label>
                                <input type="text"  class="form-control" id="name">
                            </div>
                            <div>
                                <label for="chinese" class="col-form-label">中文</label>
                                <input type="text"  class="form-control" id="chinese">
                            </div>
                        </div>
                        <div class="form-group flex_nowrap">
                            <div>
                                <label for="inprice" class="col-form-label">進價</label>
                                <input type="number"  class="form-control" id="inprice">
                            </div>
                            <div>
                                <label for="inputtime" class="col-form-label">報價時間</label>
                                <input type="date"  class="form-control" id="inputtime">
                            </div>
                            <div>
                                <label for="supply" class="col-form-label">廠商</label>
                                <input type="text"  class="form-control" id="supply">
                            </div>
                        </div>
                        <div class="form-group flex">
                            <div>
                                <label for="bottle" class="col-form-label">整瓶</label>
                                <input type="number"  class="form-control" id="bottle">
                            </div>
                            <div>
                                <label for="glass" class="col-form-label">單杯</label>
                                <input type="number"  class="form-control" id="glass">
                            </div>
                        </div>
                        <div class="form-group flex">
                            <div>
                                <label for="intro" class="col-form-label">簡介</label>
                                <textarea name="intro" id="intro" cols="20" rows="3"></textarea>
                            </div>
                            <div>
                                <label for="promo" class="col-form-label">促銷</label>
                                <textarea name="promo" id="promo" cols="20" rows="3"></textarea>
                            </div>
                        </div>

                        <?php
                        $rank = $Whiskey->math('max','rank')+1
                        ?>
                            <input type="hidden" name="table" id="table" value="whiskey">
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
    let type = $('#type').val();
    let memo = $('#memo').val();
    let name = $('#name').val();
    let chinese = $('#chinese').val();
    let inprice = $('#inprice').val();
    let inputtime = $('#inputtime').val();
    let supply = $('#supply').val();
    let bottle = $('#bottle').val();
    let glass = $('#glass').val();
    let intro = $('#intro').val();
    let promo = $('#promo').val();
    
    let rank = $('#rank').val();
    let table = $('#table').val();

    $.post('./api/add_menu.php', {type, memo, name, chinese, inprice, inputtime, supply, bottle, glass, intro, promo, rank, table}, () => {
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
    $.post('./ajax/whiskey.php',{editid},(res)=>{
        $("#edit_modal_body").html(res)
    })
}
</script>