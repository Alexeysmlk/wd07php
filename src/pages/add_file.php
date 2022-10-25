<?php
    debug($_FILES);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['files'])) {
            for ($i=0; $i<count($_FILES['files']['name']); $i++) {
                $name = $_FILES['files']['name'][$i];
                $pathBefore = $_FILES['files']['tmp_name'][$i];
                $pathNew = $_SERVER['DOCUMENT_ROOT']."/upload/".$name;
                while (file_exists($pathNew) && is_file($pathNew)) {
                    $newName = rand(100000,400000).".jpg";
                    $pathNew = $_SERVER['DOCUMENT_ROOT']."/upload/".$newName;
                }
                move_uploaded_file($pathBefore, $pathNew);
            }
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" enctype="multipart/form-data" method="post">
    <label>Добавьте файлы</label>
    <br>
    <br>
    <input type="file" multiple="multiple" name="files[]">
    <br>
    <br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
