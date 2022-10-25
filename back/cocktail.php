<div class="right_content">
    <!-- 麵包屑 -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="./back.php">後台管理</a>
            </li>
            <li class="breadcrumb-item active">
                Cocktail
            </li>
        </ol>
    </nav>

    <div class="form_group">
        <div class="form_item form_item_Title">
            <div>
                <div class="form_item_header">
                    Cocktail
                </div>
            </div>
            <div class="form_item_Title_middle">
                <a href="?do=Cocktail&type=Classic" class="title_type <?= ($_GET['type'] == 'Classic') ? 'liquor_active' : '' ?>">Classic</a>
                <a href="?do=Cocktail&type=Signature" class="title_type <?= ($_GET['type'] == 'Signature') ? 'liquor_active' : '' ?>">Signature</a>
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
            $rows = $Cocktail->all(['type' => $_GET['type']], "ORDER BY `rank` ASC");
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
                                <div class="form_item_edit" data-id="<?= $row['id'] ?>" data-toggle="modal" data-target="#editModal" onclick="edit(this)">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </div>
                                <div class="form_item_del" data-id="<?= $row['id'] ?>">
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
                                <div class="form_item_text">基底酒</div>
                                <p><?= $row['base'] ?></p>
                            </div>
                            <div>
                                <div class="form_item_text">簡介</div>
                                <p><?= $row['intro'] ?></p>
                            </div>
                        </div>
                        <div class="form_item flex w100 jc">
                            <div>
                                <div class="form_item_text">酒感</div>
                                <p><?= $row['feel'] ?></p>
                            </div>
                            <div>
                                <div class="form_item_text">酸度</div>
                                <p><?= $row['acidity'] ?></p>
                            </div>
                            <div>
                                <div class="form_item_text">甜度</div>
                                <p><?= $row['sweet'] ?></p>
                            </div>
                        </div>
                        <div class="form_item flex w100 jc">
                            <div>
                                <div class="form_item_text">材料</div>
                                <p><?= $row['ingredient'] ?></p>
                            </div>
                            <div>
                                <div class="form_item_text">步驟</div>
                                <p><?= $row['step'] ?></p>
                            </div>
                        </div>
                        <div class="form_item flex w100 jc">
                            <div>
                                <div class="form_item_text">參考網站</div>
                                <p><?= $row['web'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 w40 redd ">
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
                        <div class="form-group flex ">
                            <div class="pt-4 ml-4">
                                <?php
                                if ($_GET['type']=="Classic") {
                                ?>
                                <label class="col-form-label">分類</label>
                                <p id="type">Classic</p>
                                <?php                                    
                                } else {
                                ?>
                                <label class="col-form-label">分類</label>
                                <p id="type">Signature</p>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group flex">
                            <div>
                                <label for="name" class="col-form-label">品項</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div>
                                <label for="chinese" class="col-form-label">中文</label>
                                <input type="text" name="chinese" class="form-control" id="chinese">
                            </div>
                        </div>
                        <div class="form-group flex_nowrap">
                            <div>
                                <label for="base" class="col-form-label">基底酒</label>
                                <input type="text" class="form-control" id="base">
                            </div>
                            <div>
                                <label for="intro" class="col-form-label">簡介</label>
                                <textarea name="intro" id="intro" cols="20" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group flex">
                            <div>
                                <label for="ingredient" class="col-form-label">材料</label>
                                <textarea name="ingredient" id="ingredient" cols="20" rows="3"></textarea>
                            </div>
                            <div>
                                <label for="step" class="col-form-label">步驟</label>
                                <textarea name="step" id="step" cols="20" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group flex">
                            <div>
                                酒感
                                <select name="feel" id="feel">
                                    <option value="★★★★★">★★★★★</option>
                                    <option value="★★★★☆">★★★★☆</option>
                                    <option value="★★★☆☆">★★★☆☆</option>
                                    <option value="★★☆☆☆">★★☆☆☆</option>
                                    <option value="★☆☆☆☆">★☆☆☆☆</option>
                                    <option value="☆☆☆☆☆">☆☆☆☆☆</option>
                                </select>
                            </div>
                            <div>
                                酸度
                                <select name="acidity" id="acidity">
                                    <option value="★★★★★">★★★★★</option>
                                    <option value="★★★★☆">★★★★☆</option>
                                    <option value="★★★☆☆">★★★☆☆</option>
                                    <option value="★★☆☆☆">★★☆☆☆</option>
                                    <option value="★☆☆☆☆">★☆☆☆☆</option>
                                    <option value="☆☆☆☆☆">☆☆☆☆☆</option>
                                </select>
                            </div>
                            <div>
                                甜度
                                <select name="sweet" id="sweet">
                                    <option value="★★★★★">★★★★★</option>
                                    <option value="★★★★☆">★★★★☆</option>
                                    <option value="★★★☆☆">★★★☆☆</option>
                                    <option value="★★☆☆☆">★★☆☆☆</option>
                                    <option value="★☆☆☆☆">★☆☆☆☆</option>
                                    <option value="☆☆☆☆☆">☆☆☆☆☆</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group flex">
                            <div>
                                <label for="web" class="col-form-label">參考網站</label>
                                <input type="text" class="form-control" id="web">
                            </div>
                        </div>

                        <?php
                        $rank = $Cocktail->math('max', 'rank', ['type' => $_GET['type']]) + 1
                        ?>
                        <input type="hidden" name="table" id="table" value="cocktail">
                        <input type="hidden" name="rank" id="rank" value="<?= $rank ?>">
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
                    <h5 class="modal-title">修改商品</h5>
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
                        <button type="submit" class="btn btn-primary">確定修改</button>
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
        let name = $('#name').val();
        let chinese = $('#chinese').val();
        let base = $('#base').val();
        let intro = $('#intro').val();
        let ingredient = $('#ingredient').val();
        let step = $('#step').val();
        let web = $('#web').val();

        let rank = $('#rank').val();
        let table = $('#table').val();

        $.post('./api/add_menu.php', { type, name, chinese, base, intro, ingredient, step, web, rank, table }, (res) => {
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
        $.post('./edit_modal/cocktail.php', {
            editid
        }, (res) => {
            $("#edit_modal_body").html(res)
        })
    }
</script>