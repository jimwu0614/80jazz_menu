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
    $rank = $Cocktail->math('max','rank')+1
    ?>
    <form action="./api/add.php" method="post" style="font-size: 2rem; text-align:center;">
        <select name="kind">
            <option value="Cocktail">Cocktail</option>
        </select><br>
        <span>name</span><input type="text" name="name" id=""><br>
        <span>chinese</span><input type="text" name="chinese" id=""><br>
        <span>type</span><select name="base" id="">
                            <option value="Whiskey">Whiskey</option>  
                            <option value="Brandy">Brandy</option>  
                            <option value="Gin">Gin</option>   
                            <option value="Rum">Rum</option>
                            <option value="Tequila">Tequila</option>
                            <option value="Vodka">Vodka</option>
                        </select><br>

        <span>intro</span><input type="text" name="intro" id=""><br>
        <span>ingredient</span><textarea name="ingredient"  cols="30" rows="10"></textarea><br>
        <span>step</span><textarea name="step" id="" cols="30" rows="10"></textarea><br>
        <span>rank</span><input type="number" name="rank" value="<?=$rank?>"><br>
        <span>web</span><input type="text" name="web"><br>
        <input type="submit" value="submit">

    </form>
    <a href="index.php">back</a>
</body>

</html>