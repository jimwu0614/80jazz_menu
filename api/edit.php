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
    case '':
        unset($_POST['table']);
        
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
    case '':
        unset($_POST['table']);
        
        break;
    
}
?>
