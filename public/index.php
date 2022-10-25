<?php
    include_once __DIR__."/../src/functions.php";
    include_once __DIR__."/../src/db.php";
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];

    if ($url == '/') {
        include_once __DIR__.'/../src/pages/blog.php';
    } elseif ($url == '/add_post_form') {
        include_once __DIR__.'/../src/pages/add_post.php';
    } elseif ($url == '/edit_post_form') {
        include_once __DIR__.'/../src/pages/edit_post.php';
    } elseif (strpos($url, '/page/') === 0) {
        $tmp = explode('/', $url);
        $pageId = array_pop($tmp);
        include_once __DIR__."/../src/pages/page.php";
    }