<?php
include "../base.php";
$table = $_POST['table'];

switch ($table) {
    case 'admin':
        unset($_POST['table']);
        $data = $Admin->find($_POST['id']);
        $data['pw'] = $_POST['pw'];
        $Admin->save($data);
        break;
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
    case 'cocktail':
        unset($_POST['table']);
        $Cocktail->save($_POST);
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
    case 'soft':
        unset($_POST['table']);
        $Soft->save($_POST);
        to("../back.php?do=$table");
        break;
    case '':
        unset($_POST['table']);
        
        break;
    case '':
        unset($_POST['table']);
        
        break;
        
    }
    to("../back.php?do=$table&type={$_POST['type']}");
?>
