<?php
include "./base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            height: 2rem;
        }
    </style>
</head>

<body>
    <?php
    $rank = $Whiskey->math('max','id')+1
    ?>
    <form action="./api/add.php" method="post" style="font-size: 2rem; text-align:center;">
        <select name="liquer">
            <option value="Whiskey">Whiskey</option>
            <option value="Brandy" selected>Brandy</option>
            <option value="Gin">Gin</option>
            <option value="Rum">Rum</option>
            <option value="Sake">Sake</option>
            <option value="Wine">Wine</option>
            <option value="Cocktail">Cocktail</option>
            <option value="Softdrink">Softdrink</option>
        </select>
        <span>name</span><input type="text" name="name" id=""><br>
        <span>chinese</span><input type="text" name="chinese" id=""><br>
        <span>type</span><select name="type" id="">
                            <!-- <option value="single">single</option>  
                            <option value="blended">blended</option>  
                            <option value="bourbon">bourbon</option>    -->

                            <option value="Cognac">Cognac</option>  
                            <option value="Armagnac">Armagnac</option>  

                        </select><br>
        <!-- <span>inprice</span><input type="number" name="" id=""><br> -->
        <span>bottle</span><input type="number" name="bottle" id=""><br>
        <span>glass</span><input type="number" name="glass" id=""><br>
        <span>memo</span><input type="text" name="memo" id=""><br>
        <span>intro</span><input type="text" name="intro" id=""><br>
        <span>promo</span><input type="text" name="promo" id=""><br>
        <span>rank</span><input type="number" name="rank" value="<?=$rank?>"><br>
        <input type="submit" value="submit">

    </form>
    <a href="index.php">back</a>
</body>

</html>