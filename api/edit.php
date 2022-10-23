<?php
include "../base.php";
$table = $_POST['table'];

switch ($table) {
    case 'admin':
        unset($_POST['table']);
        $data = $Admin->find($_POST['id']);
        $data['pw'] = $_POST['pw'];
        $Admin->save($data);
        to("../back.php?do=admin");
        break;
    case 'coffee':
        unset($_POST['table']);
        $Coffee->save($_POST);
        to("../back.php?do=coffee&type={$_POST['type']}");
        break;
    case 'beans':
        unset($_POST['table']);
        $Beans->save($_POST);
        to("../back.php?do=beans");
        break;
    case 'whiskey':
        unset($_POST['table']);
        $Whiskey->save($_POST);
        to("../back.php?do=whiskey&type={$_POST['type']}");
        break;
    case 'cocktail':
        unset($_POST['table']);
        $Cocktail->save($_POST);
        to("../back.php?do=cocktail&type={$_POST['type']}");
        break;
    case 'brandy':
        unset($_POST['table']);
        $Brandy->save($_POST);
        to("../back.php?do=brandy&type={$_POST['type']}");
        break;
    case 'ginvodka':
        unset($_POST['table']);
        $Ginvodka->save($_POST);
        to("../back.php?do=ginvodka&type={$_POST['type']}");
        break;
    case 'rumteq':
        unset($_POST['table']);
        $Rumteq->save($_POST);
        to("../back.php?do=rumteq&type={$_POST['type']}");
        break;
    case '':
        unset($_POST['table']);
        
        break;
    case '':
        unset($_POST['table']);
        
        break;
    case '':
        unset($_POST['table']);
        
        break;
    
}
?>
