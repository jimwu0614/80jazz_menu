<?php
include('../base.php');
$table = "jazz_".$_POST['table'];
$DB = new DB($table);
$data = $DB->find($_POST['id']);
$pre_data = $DB->find($_POST['pre_id']);

$data['rank'] = $_POST['pre_order'];
$pre_data['rank'] = $_POST['order'];

$DB->save($data);
$DB->save($pre_data);
?>