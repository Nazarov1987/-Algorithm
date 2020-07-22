<?php

function getDirectory($dir){
    $currentDirectory = new DirectoryIterator(realpath($dir));
    getContent($currentDirectory);
}

function getContent($currentDirectory){
    foreach ($currentDirectory as $item) {
        if ($item->isDot()) continue;
        if (!$item->isDir()) {
            echo "<img scr='images/file.jpg' alt='#' height='15px' width='15px'>{$item->getBaseName()}<br>";
        } else echo "<img scr='images/folder.jpg' alt='#' height='15px' width='15px'><a href='?path={$item->getPathname()}'>
{$item}</a><br>";
    }
}

if(!empty($_GET['path'])){
    getDirectory($_GET['path']);
}else{
    getDirectory('/');
}
?>

<html>
    <meta charset="UTF-8">
    <title>DirectoryIterator</title>
    <style> a{
    text-decoration: none;
        color: red;
    }
    </style>
    <head>
        <body>
        </body>
    </head>
</html>