<?php
session_start();
// для сброса счетчика передаем GET-запрос с параметром reset (любое значение)
if(isset($_GET['reset'])){
    unset($_SESSION['count']);
    header('Location: '.basename($_SERVER["SCRIPT_FILENAME"]));
    exit;
}
if(!isset($_SESSION['count'])){
    $_SESSION['count']=0;
}
$counter = $_SESSION['count'];
if(++$counter>2){
    $_SESSION['redirected']=1;
    header('Location: ./get-session-data.php');
}else{
    $_SESSION['count'] = $counter;
    echo "Эта страница открыта $counter раз";
}
