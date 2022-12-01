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
    <link rel="stylesheet" href="./css/events.css">
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
                <div class="langBox">
                    <input type="checkbox" class="checkbox" id="chk" />
                    <label class="langLabel" for="chk">
                        <img class="flag" src="https://img.icons8.com/emoji/48/000000/taiwan-emoji.png" />
                        <img class="flag" src="https://img.icons8.com/emoji/48/000000/united-states-emoji.png"/>
                        <div class="ball"></div>
                    </label>
    </div>
                <li class="enlist"><a href="?do=events" class="pulse">Events&Info</a></li>
                <li class="cnlist" style="display:none;"><a href="?do=events" class="pulse">活動&資訊</a></li>
                
                <li class="enlist"><a href="?do=wine">Wine</a></li>
                <li class="cnlist" style="display:none;"><a href="?do=wine">葡萄酒</a></li>

                <li class="enlist"><a href="?do=cocktail">Cocktails</a></li>
                <li class="cnlist" style="display:none;"><a href="?do=cocktail">調酒</a></li>

                <li class="enlist"><a href="?do=whiskey">Whiskey</a></li>
                <li class="cnlist" style="display:none;"><a href="?do=whiskey">威士忌</a></li>

                <li class="enlist"><a href="?do=brandy">Brandy</a></li>
                <li class="cnlist" style="display:none;"><a href="?do=brandy">白蘭地</a></li>

                <li class="enlist"><a href="?do=ginvodka">Gin & Vodka</a></li>
                <li class="cnlist" style="display:none;"><a href="?do=ginvodka">琴酒&伏特加</a></li>

                <li class="enlist"><a href="?do=rumteq">Rum&Tequila</a></li>
                <li class="cnlist" style="display:none;"><a href="?do=rumteq">蘭姆酒&龍舌蘭</a></li>

                <li class="enlist"><a href="?do=beerliquor">Beer&Liquor</a></li>
                <li class="cnlist" style="display:none;"><a href="?do=beerliquor">啤酒&其他</a></li>

                <li class="enlist"><a href="?do=sake">Sake&Shochu</a></li>
                <li class="cnlist" style="display:none;"><a href="?do=sake">清酒&燒酎</a></li>

                <li class="enlist"><a href="?do=softdrink">Softdrinks</a></li>
                <li class="cnlist" style="display:none;"><a href="?do=softdrink">無酒精</a></li>

                <!-- <li class="enlist"><a href="?do=meal" id="meal">Meal</a></li>
                <li class="cnlist" style="display:none;"><a href="?do=meal" id="meal">Meal</a></li> -->

                <!-- <li><a href="./coffee.php">Coffee</a></li> -->
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
        $("#bubble").show().delay(2000).fadeOut();
    </script>
</body>

</html>