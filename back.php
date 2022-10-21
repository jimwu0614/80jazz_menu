<?php
$do = $_GET['do'] ?? 'main';
include('./base.php');
if(empty($_SESSION['user'])){
    to('./index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>80Jazz後台管理</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <script src="./js/jqyery3.6.1.js"></script>

    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/back.css">
</head>

<body>

    <div class="content d-flex flex-wrap">

        <div class="nav_top d-flex ">

            <nav
                class="navbar shadow-sm  navbar-expand-lg navbar-light bg-light px-lg-5 py-2 justify-content-end right_nav">
                <button class="navbar-toggler left_toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand phone_logo" href="./back.php">
                    80Jazz 後台管理
                </a>

                <button class="navbar-toggler user_toggler" type="button">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>


                <div class="user_nav">
                    <ul class="navbar-nav mt-2 mt-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">
                                前台
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./api/logout.php">
                                登出
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


            <nav class="navbar navbar-expand-lg navbar-light bg-light left_nav">
                <a class="navbar-brand" href="./back.php">
                    80Jazz 後台管理
                </a>

            </nav>


        </div>

        <div class="left">
            <a href="?do=coffee&type=Coffee" class=" left_item <?=($do == 'coffee')?'left_item_active':''?>">
                Coffee
            </a>
            <a href="?do=beans" class=" left_item <?=($do == 'bean')?'left_item_active':''?>">
                Beans
            </a>
            <a href="?do=whiskey&type=Single" class=" left_item <?=($do == 'whiskey')?'left_item_active':''?>">
                Whiskey
            </a>
            <a href="?do=brandy&type=Cognac" class=" left_item <?=($do == 'brandy')?'left_item_active':''?>">
                Brandy
            </a>
            <a href="?do=ginvodka&type=Gin" class=" left_item <?=($do == 'ginvodka')?'left_item_active':''?>">
                Gin&Vodka
            </a>
            <a href="?do=rumteq&type=Rum" class=" left_item <?=($do == 'rumteq')?'left_item_active':''?>">
                Rum&Tequila
            </a>
            <a href="?do=beerlique&type=Beer" class=" left_item <?=($do == 'beerliquer')?'left_item_active':''?>">
                Beer&Liquer
            </a>
            <a href="?do=sake&type=Sake" class=" left_item <?=($do == 'sake')?'left_item_active':''?>">
                Sake&Shochu
            </a>
            <a href="?do=wine" class=" left_item <?=($do == 'wine')?'left_item_active':''?>">
                Wine
            </a>
            <a href="?do=cocktail&type=Classic" class=" left_item <?=($do == 'cocktail')?'left_item_active':''?>">
                Cocktail
            </a>
            <a href="?do=softdrink" class=" left_item <?=($do == 'softdrink')?'left_item_active':''?>">
                Softdrink
            </a>
            <a href="?do=event" class=" left_item <?=($do == 'event')?'left_item_active':''?>">
                Event
            </a>
            <a href="?do=admin" class=" left_item <?=($do == 'admin')?'left_item_active':''?>">
                帳號管理
            </a>
        </div>

        <div class="right">
            <?php
            if (file_exists('./back/' . $do . '.php')) {
                include('./back/' . $do . '.php');
            } else {
                to('./back.php');
            }
            ?>
        </div>

    </div>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    <!-- del -->
    <script src="./js/del.js"></script>

    <!-- orderbtn -->
    <script src="./js/order.js"></script>

    <!-- sh -->
    <script src="./js/showhide.js"></script>

    



    <script>
    // phone nav show
    $('.left_toggler').click(function() {
        $('.left').fadeToggle();
    })

    $('.user_toggler').click(function() {
        $('.user_nav').fadeToggle();
    })


    $(document).ready(function() {
        //custom-file show name
        $(".custom-file-input").change(function() {
            $(this).next(".custom-file-label").html($(this).val().split("\\").pop());

        });

        // img edit hover
        $('.form_item_img>img').mouseover(function() {

            $(this).next().addClass('form_item_img_btn_show');

            $('.form_item_img_btn').mouseover(function() {

                $(this).addClass('form_item_img_btn_show');

            })
        })

        $('.form_item_img_btn').mouseout(function() {
            $(this).removeClass('form_item_img_btn_show');
        })



        // img form submit
        $('.edit_img_file').change(function() {
            // console.log($(this).parent());
            $(this).parent().submit();
        })

        // drop_item_input show name & show img
        $('.drop_item_input').change(function() {
            $(this).prev("label").text($(this).val().split("\\").pop());

            readURL(this)
        })


    });

    // get upload img data & change inputDiv BG
    function readURL(e) {

        console.log(e.files);

        if (e.files && e.files[0]) {


            var reader = new FileReader();

            reader.onload = function(e) {

                $('.drop_item_Img').css("background-image", "url(" + e.target.result + ")")

            }

            reader.readAsDataURL(e.files[0]);

        }

    }

    // dragenter change css
    function dragIn(e) {

        $('.drop_item').addClass('dragActive');
    }

    // dragout change css
    function dragOut(e) {

        $('.drop_item').removeClass('dragActive');
    }

    // dragend change css
    function drogOff(e) {

        $('.drop_item').removeClass('dragActive');

    }

    $(".swal2-popup").show().delay(1500).fadeOut();
    </script>
</body>

</html>