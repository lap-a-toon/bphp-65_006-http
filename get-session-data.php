<?php
session_start();
if(isset($_SESSION['redirected']) && $_SESSION['redirected']=='1'){
    echo "Произошел редирект<br>";
    echo "<a href=\"./start-session.php\">Вернуться</a><br>";
    unset($_SESSION['redirected']);
}
if(isset($_SESSION['count'])){
    echo "Страница session-start.php была открыта " . $_SESSION['count'] . " раз";
}