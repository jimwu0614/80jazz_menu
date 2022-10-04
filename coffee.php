<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">    
    <link href="http://fonts.cdnfonts.com/css/melinda" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/behind-script" rel="stylesheet">
        
    <link rel="stylesheet" href="./css/bgpic.css">
    <link rel="stylesheet" href="./css/coffee.css">
    <script src="./js/jqyery3.6.1.js"></script>
</head>
<body>
    <div class="coffee"></div>

    <div class="box ">
	    <input type="checkbox" class="checkbox" id="chk" />
	        <label class="label" for="chk">
                <img class="flag" src="https://img.icons8.com/emoji/48/000000/taiwan-emoji.png"/>
                <img class="flag" src="https://img.icons8.com/emoji/48/000000/japan-emoji.png"/>
	    	<div class="ball"></div>
	    </label>
    </div>

    <div class="container">

        <div class="row ">
            <div class="col-12 title">
                <div class="line">&nbsp;</div>
                <h1>Coffee</h1>
            </div>
            <div class="col">
                <div class="mt-3 above">
                    <span class="cn">義式濃縮</span>
                    <span class="jp" style="display:none;">エスプレッソ</span><br>
                </div>
                <div class="mt-1 under">
                    <span class="en">Espresso</span>
                    <span class="price">.......$XXX</span> <br>
                </div>

                <div class="mt-3 above">
                    <span class="cn">美式</span>
                    <span class="jp" style="display:none;">アメリカーノ</span><br>
                </div>
                <div class="mt-1 under">
                    <span class="en">Americano </span>
                    <span class="price">.......$XXX</span> <br>
                </div>

                <div class="mt-3 above">
                    <span class="cn">拿鐵</span>
                    <span class="jp" style="display:none;">カフェラテ</span><br>
                </div>
                <div class="mt-1 under">
                    <span class="en"> Caffè latte</span>
                    <span class="price">.......$XXX</span> <br>
                </div>

                <div class="mt-3 above">
                    <span class="cn">風味拿鐵（榛果、香草、焦糖瑪琪朵、摩卡、抹茶）</span>
                    <span class="jp" style="display:none;">フレーバーラテ（ヘーゼルナッツ、バニラ、キャラメル、モカ、抹茶）</span><br>
                </div>
                <div class="mt-1 under">
                    <span class="en"> Flavored latte(Hazelnut, Vanilla, Caramel, Mocha, Matcha)</span>
                    <span class="price">.......$XXX</span> <br>
                </div>

                <div class="mt-3 above">
                    <span class="cn">焦糖瑪奇朵</span>
                    <span class="jp" style="display:none;">キャラメルマキアート</span><br>
                </div>
                <div class="mt-1 under">
                    <span class="en"> caramel macchiato</span>
                    <span class="price">.......$XXX</span> 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <span class="cn">水果茶</span><span class="en">Fruit Tea </span><span class="price">.......$XXX</span> <br>
                <span class="cn">花草茶</span><span class="en">Flour Tea </span><span class="price">.......$XXX</span> <br>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <span class="cn">愛爾蘭咖啡</span><span class="en">Irish coffee</span><span class="price">.......$XXX</span> <br>
                <span class="cn">咖啡馬丁尼</span><span class="en">Expresso Martini</span><span class="price">.......$XXX</span> <br>
                <span class="cn">咖啡琴湯尼</span><span class="en">Turbo Gin & Tonic</span><span class="price">.......$XXX</span> <br>
                <span class="cn">漂浮咖啡波本</span><span class="en">Coffee Bourbon Float</span><span class="price">.......$XXX</span> <br>
            </div>     
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script>
        $(".label").on("click",function () {
            $(".cn").toggle()
            $(".jp").toggle()
        })
    </script>
</body>
</html>