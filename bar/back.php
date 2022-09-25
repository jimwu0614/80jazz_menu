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
    $rank = $Liquer->math('max','rank')+1
    ?>
    <form action="./api/add.php" method="post" style="font-size: 2rem; text-align:center;">
        <select name="kind">
            <option value="Whiskey">Whiskey</option>
            <option value="Brandy">Brandy</option>
            <option value="Ginvodka">Ginvodka</option>
            <option value="Rumteq">Rumteq</option>
            <option value="Liquer" selected>Liquer</option>
            <option value="Sake">Sake</option>
            <option value="Wine">Wine</option>
            <option value="Cocktail">Cocktail</option>
            <option value="Softdrink">Softdrink</option>
            <option value="Meal">Meal</option>
        </select><br>
        <span>name</span><input type="text" name="name" id=""><br>
        <span>chinese</span><input type="text" name="chinese" id=""><br>
        <span>type</span><select name="type" id="">
                            <!-- <option value="single">single</option>  
                            <option value="blended">blended</option>  
                            <option value="bourbon">bourbon</option>    -->

                            <!-- <option value="Cognac">Cognac</option>  
                            <option value="Armagnac">Armagnac</option>   -->

                            <!-- <option value="Gin">Gin</option>
                            <option value="Vodka" selected>Vodka</option> -->

                            <!-- <option value="Rum">Rum</option>
                            <option value="Tequila">Tequila</option> -->

                            <option value="Liquer">Liquer</option>
                        </select><br>
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