<?php
include "../base.php";
$table = $_POST['table'];
switch ($table) {
    
    case 'coffee':
        unset($_POST['table']);
        $Coffee->save($_POST);
        to("../back.php?do=coffee");
        break;
    case 'beans':
        unset($_POST['table']);
        $Beans->save($_POST);
        to("../back.php?do=beans");
        break;
    case 'whiskey':
        unset($_POST['table']);
        $Whiskey->save($_POST);
        to("../back.php?do=whiskey");
        break;
    case 'brandy':
        unset($_POST['table']);
        $Brandy->save($_POST);
        to("../back.php");
        break;
    case 'ginvodka':
        unset($_POST['table']);
        $Ginvodka->save($_POST);
        to("../back.php");
        break;
    case 'rumteq':
        unset($_POST['table']);
        $Rumteq->save($_POST);
        to("../back.php");
        break;
    case 'beerliquer':
        unset($_POST['table']);
        $Beerliquer->save($_POST);
        to("../back.php");
        break;
    case 'sake':
        unset($_POST['table']);
        $Sake->save($_POST);
        to("../back.php");
        break;
    case 'wine':
        unset($_POST['table']);
        $Wine->save($_POST);
        to("../back.php");
        break;
    case 'cocktail':
        unset($_POST['table']);
        $Cocktail->save($_POST);
        to("../cocktail.php");
        break;
    case 'softdrink':
        unset($_POST['table']);
        $Soft->save($_POST);
        to("../back.php");
        break;
    case 'meal':
        unset($_POST['table']);
        $Meal->save($_POST);
        to("../back.php");
        break;
}

?>
