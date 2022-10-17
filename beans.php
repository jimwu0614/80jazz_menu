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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/melinda" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/behind-script" rel="stylesheet">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/bgpic.css">
    <link rel="stylesheet" href="./css/coffee.css">
    <script src="./js/jqyery3.6.1.js"></script>
</head>

<body>
    <div class="beansbg"></div>
    <div class="container main_body">
        <div class="row">
            <div class="col-12 title mt-5">
                <div class="bigline">&nbsp;</div>
                <h1>Home Roasting Coffee Beans</h1>
            </div>
        </div>
        <div class="row bean_row">
            <?php
            $rows = $Beans->all(['sh'=>1]);
            foreach ($rows as $key => $value) {
            ?>
            <div class="col-12 col-md-5 m-3">
                <ul class="bean_body">
                    <li><?=$value['name']?></li>
                    <li>產地：&nbsp;<?=$value['land']?></li>
                    <li>焙度：&nbsp;<?=$value['roast']?></li>
                    <li>價格：&nbsp;<span style="letter-spacing: 2px;"><?=$value['price']?></span>/半磅</li>
                    <li class="bean_intro">簡介：<br><?=$value['intro']?></li>
                </ul>
            </div>
            <?php
            }
            ?>
        </div>




        <div class="row">
            <div class="col-12 title">
                <h1 class="back"><a href="../80jazz_menu/coffee.php">Back</a></h1>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script>

    </script>
</body>

</html>