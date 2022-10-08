<?php
include "./base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>80 Jazz</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- 字型 -->
    <link href="http://fonts.cdnfonts.com/css/mufan" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/eagle-lake" rel="stylesheet">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/liquor.css">
    <link rel="stylesheet" href="./css/bgpic.css">
    <script src="./js/jqyery3.6.1.js"></script>
</head>

<body>
    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <div class="sidebar-header">
                    <div class="sidebar-brand">
                        <a href="index.php">80 Jazz Menu</a>
                    </div>
                </div>
                <li><a href="?do=whiskey">Whiskey</a></li>
                <li><a href="?do=brandy">Brandy</a></li>
                <li><a href="?do=ginvodka">Gin & Vodka</a></li>
                <li><a href="?do=rumteq">Rum&Tequila</a></li>
                <li><a href="?do=beerliquer">Beer&Liquer</a></li>
                <li><a href="?do=sake">Sake&Shochu</a></li>
                <li><a href="?do=wine" id="wine">Wine</a></li>
                <li><a href="?do=cocktail">Cocktail</a></li>
                <li><a href="?do=softdrink">Softdrink</a></li>
                <li><a href="?do=meal" id="meal">Meal</a></li>
                <li><a href="?do=event" id="event">Events</a></li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <?php
					$do=$_GET['do']??'main';
                    $file='./front/'.$do.".php";
                    if(file_exists($file)){
                        include $file;
                    }else{
                        include "./front/main.php";
                    }
                ?>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <script src="./js/js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script>
        //點擊小圖會用MODAL放大

    // $(document).ready(function () {

    // $(".open").on("click",function(){
    //     let img=$(this).attr('src')  //拿到圖片的連結

    //                             //把連結塞到一個img標籤中..把標籤放到modal中的modal-body區塊中...
    //                             //button那三行是右上角的叉
    //     $('.modal-header').html(`<img class="modal_pic" src="${img}">  
    //                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    //                                 <span aria-hidden="true">&times;</span>
    //                             </button>
    //                             `) 
    //     })

    // })
    </script>
</body>

</html>