<?php
include_once "../base.php";
$chk = $Admin->math('count','id',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if ($chk>=1) {
    $_SESSION['user']=$_POST['acc'];
    to('../back.php');
}else{
    ?>
    <script>
        alert('帳號或密碼輸入錯誤');
        location.href='../index.php';
    </script>
<?php

}
?>