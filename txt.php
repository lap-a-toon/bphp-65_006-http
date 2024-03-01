<?php
if(isset($_GET['text']) && trim($_GET['text'])!==''){
    header('Content-Type: plain/text');
    header('Content-Disposition: attachment; filename="обозвали_файл.txt"');
    echo $_GET['text'];
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Неправильный ввод</title>
</head>
<body>
    <h1>Для того чтобы получить файл, надо передать GET-запрос</h1>
    <p>Чтобы получить текстовый файл - добавьте в адресной строке GET-запрос:</p>
    <code>?text=здесь желаемый текст</code>
</body>
</html>

<?php
}