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

    <link rel="stylesheet" href="./css/bgpic.css">
    <link rel="stylesheet" href="./css/coffee.css">
    <script src="./js/jqyery3.6.1.js"></script>
</head>

<body>
    <div class="coffee"></div>
    <div class="beans"><a href="./beans.php"><img src="./img/beans.png" alt=""></a></div>
    <div class="speech-bubble" id='bubble'>Roasted<br>Coffee bean<br>On sale</div>
    <div class="box ">
        <input type="checkbox" class="checkbox" id="chk" />
        <label class="label" for="chk">
            <img class="flag" src="https://img.icons8.com/emoji/48/000000/taiwan-emoji.png" />
            <img class="flag" src="https://img.icons8.com/emoji/48/000000/japan-emoji.png" />
            <div class="ball"></div>
        </label>
    </div>

    <div class="container-fluid main_body">

        <div class="row">
            <div class="col-12 title">
                <div class="line">&nbsp;</div>
                <h1>Coffee</h1>
            </div>
            <div class="col" id="coffee_items">

                <!-- 咖啡內文這邊 -->

            </div>
        </div>
        
        <div class="row">
            <div class="col-12 title">
                <div class="line">&nbsp;</div>
                <h1>Pour Over Coffee</h1>
            </div>
            <div class="col" id="pour_items">

                <!-- 手沖內文這邊 -->

            </div>
        </div>

        <div class="row">
            <div class="col-12 title">
                <div class="line">&nbsp;</div>
                <h1>Coffe Cocktail</h1>
            </div>
            <div class="col" id="cocktail_items">

                <!-- 咖啡調酒內文這邊 -->

            </div>
        </div>

        <div class="row">
            <div class="col-12 title">
                <div class="line">&nbsp;</div>
                <h1>Tea</h1>
            </div>
            <div class="col" id="tea_items">

            </div>
        </div>

        <div class="row">
            <div class="col-12 title">
                <!-- <div class="line">&nbsp;</div> -->
                <h1 class="back"><a href="../80jazz_menu/">Back</a></h1>
            </div>

        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script>
        $(".label").on("click", function() {
            $(".cn").toggle()
            $(".jp").toggle()
        })

        $("#bubble").show().delay(2500).fadeOut();



        $.post("./get/getcoffee.php", {type:'Coffee'}, (res) => {
            $("#coffee_items").html(res)
        })
        $.post("./get/getcoffee.php", {type:'Pour'}, (res) => {
            $("#pour_items").html(res)
        })
        $.post("./get/getcoffee.php", {type:'Cocktail'}, (res) => {
            $("#cocktail_items").html(res)
        })
        $.post("./get/getcoffee.php", {type:'Tea'}, (res) => {
            $("#tea_items").html(res)
        })
    </script>
</body>

</html>