<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['create'])) {
        require 'model/Create.php';
        $config = require 'model/config.php';

        $create = new Create($config['database']);

        
        $title = $create->filter($_POST['title']);
        $tag = $create->filter($_POST['tag']);
        $about = $create->filter($_POST['message']);


        if (!empty($title && $tag && $about)) {
            $create->query(
                "INSERT INTO todo(title, tag, about) VALUE(:title, :tag, :about)",
                ['title' => $title, 'tag' => $tag, 'about' => $about]
            );
            header('Location: /');
        }
        header('Location: /');
    }
}