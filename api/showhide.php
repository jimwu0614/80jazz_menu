<?php
include('../base.php');
$table = "jazz_".$_POST['table'];
$DB = new DB($table);

$data = $DB->find($_POST['id']);

$data['sh'] = $_POST['sh'];

$DB->save($data);
?>