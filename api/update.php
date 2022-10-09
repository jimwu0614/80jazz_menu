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
    case '':
        unset($_POST['table']);
        
        break;
    
}
?>