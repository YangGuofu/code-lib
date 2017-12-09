<?php
$self = $_SERVER['PHP_SELF'];
$ignores = ['.', '..', substr($self, strrpos($self, '/')+1)];
foreach (scandir('.') as $file){
    !in_array($file, $ignores) && print_r("<h1><a href='{$file}'>{$file}</a><h1>");
}