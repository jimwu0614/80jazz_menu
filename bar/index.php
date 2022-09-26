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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/mufan" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/eagle-lake" rel="stylesheet">
                
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
                <li><a href="?do=rumteq">Rum &Tequila</a></li>
                <li><a href="?do=beerliquer">Beer&Liquer</a></li>
                <li><a href="?do=sake" id="sake">Sake&Shochu</a></li>
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
</body>

</html>