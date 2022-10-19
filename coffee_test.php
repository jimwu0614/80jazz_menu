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
            <div class="col">
                <div class="mt-3 above">
                    <span class="cn">義式濃縮&nbsp;&nbsp;&nbsp;Espresso</span>
                    <span class="jp" style="display:none;">エスプレッソ&nbsp;&nbsp;&nbsp;Espresso</span>
                </div>
                <div class="mt-1 under">
                    <span class="en">&nbsp;</span>
                    <span class="price">$120</span>
                </div>

                <div class="mt-3 above">
                    <span class="cn">美式&nbsp;&nbsp;&nbsp;Americano</span>
                    <span class="jp" style="display:none;">アメリカーノ&nbsp;&nbsp;&nbsp;Americano</span>
                </div>
                <div class="mt-1 under">
                    <span class="en">&nbsp;&nbsp;&nbsp;</span>
                    <span class="price">$130</span>
                </div>

                <div class="mt-3 above">
                    <span class="cn">拿鐵&nbsp;&nbsp;&nbsp;Caffè latte</span>
                    <span class="jp" style="display:none;">カフェラテ&nbsp;&nbsp;&nbsp;Caffè latte</span>
                </div>
                <div class="mt-1 under">
                    <span class="en">&nbsp;&nbsp;&nbsp;</span>
                    <span class="price">$160</span>
                </div>

                <div class="mt-3 above">
                    <span class="cn">風味拿鐵（榛果、香草、焦糖瑪琪朵、摩卡、抹茶）</span>
                    <span class="jp" style="display:none;">フレーバーラテ（ヘーゼルナッツ、バニラ、キャラメル、モカ、抹茶）</span>
                </div>
                <div class="mt-1 under">
                    <span class="en">Flavored latte(Hazelnut, Vanilla, Caramel, Mocha, Matcha)</span>
                    <span class="price">$180</span>
                </div>

                <div class="mt-3 above">
                    <span class="cn">焦糖瑪奇朵&nbsp;&nbsp;&nbsp;Caramel macchiato</span>
                    <span class="jp" style="display:none;">キャラメルマキアート&nbsp;&nbsp;&nbsp;Caramel macchiato</span>
                </div>
                <div class="mt-1 under">
                    <span class="en">&nbsp;&nbsp;&nbsp;</span>
                    <span class="price">$180</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 title">
                <div class="line">&nbsp;</div>
                <h1>Coffe Cocktail</h1>
            </div>
            <div class="col">
                <div class="mt-3 above">
                    <span class="cn">愛爾蘭咖啡&nbsp;&nbsp;&nbsp;Irish coffee</span>
                    <span class="jp" style="display:none;">アイリッシュコーヒー&nbsp;&nbsp;&nbsp;Irish coffee</span>
                </div>
                <div class="mt-1 under">
                    <span class="en">&nbsp;&nbsp;&nbsp;</span>
                    <span class="price">$220</span>
                </div>

                <div class="mt-3 above">
                    <span class="cn">咖啡馬丁尼&nbsp;&nbsp;&nbsp;Expresso Martini</span>
                    <span class="jp" style="display:none;">エスプレッソ・マティーニ&nbsp;&nbsp;&nbsp;Expresso Martini</span>
                </div>
                <div class="mt-1 under">
                    <span class="en">&nbsp;&nbsp;&nbsp;</span>
                    <span class="price">$200</span>
                </div>

                <div class="mt-3 above">
                    <span class="cn">咖啡琴湯尼&nbsp;&nbsp;&nbsp;Turbo Gin & Tonic</span>
                    <span class="jp" style="display:none;">エスプレッソ・ジントニック&nbsp;&nbsp;&nbsp;Turbo Gin & Tonic</span>
                </div>
                <div class="mt-1 under">
                    <span class="en">&nbsp;&nbsp;&nbsp;</span>
                    <span class="price">$200</span>
                </div>

                <div class="mt-3 above">
                    <span class="cn">漂浮咖啡波本Coffee Bourbon Float&nbsp;&nbsp;&nbsp;</span>
                    <span class="jp" style="display:none;">バーボンコーヒーフロート&nbsp;&nbsp;&nbsp;Coffee Bourbon Float</span>
                </div>
                <div class="mt-1 under">
                    <span class="en">&nbsp;&nbsp;&nbsp;</span>
                    <span class="price">$220</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 title">
                <div class="line">&nbsp;</div>
                <h1>Tea</h1>
            </div>
            <div class="col">
                <div class="mt-3 above">
                    <span class="cn">水果茶</span>
                    <span class="jp" style="display:none;">フルーツティー</span>
                </div>
                <div class="mt-1 under">
                    <span class="en">Fruit Tea</span>
                    <span class="price">$160</span>
                </div>

                <div class="mt-3 above">
                    <span class="cn">花草茶</span>
                    <span class="jp" style="display:none;">フレーバーティー</span>
                </div>
                <div class="mt-1 under">
                    <span class="en">Flour Tea</span>
                    <span class="price">$180</span>
                </div>
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
    </script>
</body>

</html>