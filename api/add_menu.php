<?php
include "../base.php";
$table = $_POST['table'];
switch ($table) {
    
    case 'coffee':
        unset($_POST['table']);
        $Coffee->save($_POST);
        break;
    case 'beans':
        unset($_POST['table']);
        $Beans->save($_POST);
        break;
    case 'whiskey':
        unset($_POST['table']);
        $Whiskey->save($_POST);
        break;
    case 'brandy':
        unset($_POST['table']);
        $Brandy->save($_POST);
        break;
    case 'ginvodka':
        unset($_POST['table']);
        $Ginvodka->save($_POST);
        break;
    case 'rumteq':
        unset($_POST['table']);
        $Rumteq->save($_POST);
        break;
    case 'beerliquor':
        unset($_POST['table']);
        $Beerliquor->save($_POST);
        break;
    case 'sake':
        unset($_POST['table']);
        $Sake->save($_POST);
        break;
    case 'wine':
        unset($_POST['table']);
        $Wine->save($_POST);
        break;
    case 'cocktail':
        unset($_POST['table']);
        $Cocktail->save($_POST);
        break;
    case 'soft':
        unset($_POST['table']);
        $Soft->save($_POST);
        break;
    case 'meal':
        unset($_POST['table']);
        $Meal->save($_POST);
        break;
    case 'events':
        unset($_POST['table']);
        $Meal->save($_POST);
        break;
}

?>
