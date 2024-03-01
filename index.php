<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2: создаем HTML-страницы</title>
</head>
<body>
    <ul>
        <li><a href="404.php">Страница, которая не должна быть найдена</a></li>
        <li><a href="real404.php">Страница, которой действительно нет</a> (вот прямо даже файл не делал специально для наглядности)</li>
        <li><a href="txt.php?text=Мне захотелось отдать такой текст в файле">Страница отдаст файл TXT, в котором будет передан текст из GET-параметра</a></li>
        <li>Сессии:
            <ul>
                <li><a href="start-session.php" target="_blank">Запускаем сессию а на 3 переход или её обновление перебросим на следующую страницу</a></li></li>
                <li><a href="start-session.php?reset=qwe" target="_blank">Сбрасываем сессионный счетчик</a></li></li>
                <li><a href="get-session-data.php" target="_blank">Смотрим сколько раз открывалась предыдущая страница</a></li>
            </ul>
            
    </ul>
</body>
</html>