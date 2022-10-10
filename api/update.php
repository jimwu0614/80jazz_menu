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
        $data = $Coffee->find($_POST['id']);
        $data['type'=>$_POST['type'],
              'name'=>$_POST['name'],
              'chinese'=>$_POST['chinese'],
              'japanese'=>$_POST['japanese'],
              'price'=>$_POST['price']];
        $Coffee->save($data);
        to("../back.php?do=coffee");
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
    case '':
        unset($_POST['table']);
        
        break;
    
}
?>