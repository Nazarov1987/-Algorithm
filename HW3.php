<?php

$dir = new DirectoryIterator("../");

foreach ($dir as $item){
    if($item -> isDir()){
        echo $item->getFilename() . ' ' . $item->getType() . "<br>";
    }if($item -> isFile()){
        echo $item->getFilename() . ' ' . $item->getType() . "<br>";
    }
}

