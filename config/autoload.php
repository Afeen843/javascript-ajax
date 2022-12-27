<?php


spl_autoload_register('autoload');

function autoload($classname)
{
    $path = 'database/';
    $extension = '.php';
    $full2path = "$path$classname$extension";
    include_once $fullpath;


}


