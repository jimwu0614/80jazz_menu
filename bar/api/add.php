<?php
include "../base.php";
$liquer = $_POST['liquer'];
switch ($liquer) {
    
    case 'Whiskey':
        unset($_POST['liquer']);
        $Whiskey->save($_POST);
        to("../back.php");
        break;
    case 'Brandy':
        unset($_POST['liquer']);
        $Brandy->save($_POST);
        to("../back.php");
        break;
    case 'Ginvodka':
        unset($_POST['liquer']);
        $Ginvodka->save($_POST);
        to("../back.php");
        break;
    case 'Rumteq':
        unset($_POST['liquer']);
        $Rumteq->save($_POST);
        to("../back.php");
        break;
    case 'Sake':
        unset($_POST['liquer']);
        $Sake->save($_POST);
        to("../back.php");
        break;
    case 'Wine':
        
        
        break;
    case 'Cocktail':
        
        
        break;
    case 'Softdrink':
        
        
        break;
    case 'Meal':
        
        
        break;
    

}

?>
