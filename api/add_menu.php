<?php
include "../base.php";
$table = $_POST['table'];
switch ($table) {
    
    case 'Coffee':
        unset($_POST['table']);
        $Coffee->save($_POST);
        to("../back.php?do=coffee");
        break;
    case 'Whiskey':
        unset($_POST['table']);
        $Whiskey->save($_POST);
        to("../back.php");
        break;
    case 'Brandy':
        unset($_POST['table']);
        $Brandy->save($_POST);
        to("../back.php");
        break;
    case 'Ginvodka':
        unset($_POST['table']);
        $Ginvodka->save($_POST);
        to("../back.php");
        break;
    case 'Rumteq':
        unset($_POST['table']);
        $Rumteq->save($_POST);
        to("../back.php");
        break;
    case 'Beerliquer':
        unset($_POST['table']);
        $Beerliquer->save($_POST);
        to("../back.php");
        break;
    case 'Sake':
        unset($_POST['table']);
        $Sake->save($_POST);
        to("../back.php");
        break;
    case 'Wine':
        unset($_POST['table']);
        $Wine->save($_POST);
        to("../back.php");
        break;
    case 'Cocktail':
        unset($_POST['table']);
        $Cocktail->save($_POST);
        to("../cocktail.php");
        break;
    case 'Softdrink':
        unset($_POST['table']);
        $Soft->save($_POST);
        to("../back.php");
        break;
    case 'Meal':
        unset($_POST['table']);
        $Meal->save($_POST);
        to("../back.php");
        break;
}

?>
