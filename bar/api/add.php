<?php
include "../base.php";
$kind = $_POST['kind'];
switch ($kind) {
    
    case 'Whiskey':
        unset($_POST['kind']);
        $Whiskey->save($_POST);
        to("../back.php");
        break;
    case 'Brandy':
        unset($_POST['kind']);
        $Brandy->save($_POST);
        to("../back.php");
        break;
    case 'Ginvodka':
        unset($_POST['kind']);
        $Ginvodka->save($_POST);
        to("../back.php");
        break;
    case 'Rumteq':
        unset($_POST['kind']);
        $Rumteq->save($_POST);
        to("../back.php");
        break;
    case 'Liquer':
        unset($_POST['kind']);
        $Liquer->save($_POST);
        to("../back.php");
        break;
    case 'Sake':
        unset($_POST['kind']);
        $Sake->save($_POST);
        to("../back.php");
        break;
    case 'Wine':
        unset($_POST['kind']);
        $Wine->save($_POST);
        to("../back.php");
        break;
    case 'Cocktail':
        unset($_POST['kind']);
        $Cocktail->save($_POST);
        to("../cocktail.php");
        break;
    case 'Softdrink':
        unset($_POST['kind']);
        $Soft->save($_POST);
        to("../back.php");
        break;
    case 'Meal':
        unset($_POST['kind']);
        $Meal->save($_POST);
        to("../back.php");
        break;
}

?>
