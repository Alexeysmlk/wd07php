<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql = "UPDATE posts SET title = '$title', content = '$content' where id = {$_GET['id']}";
        mysqli_query($connection, $sql);
    }


    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id = $id";
    $res = mysqli_query($connection, $sql);
    $page = mysqli_fetch_assoc($res);
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
<form action="" method="post">
    <input type="text" name="title" value="<?=$page['title']?>"/>
    <br>
    <br>
    <br>
    <textarea name="content" cols="30" rows="10">
        <?=$page['content']?>
    </textarea>
    <br>
    <br>
    <br>
    <button type="submit">Send</button>
</form>
</body>
</html>
