<?php
$dir = 'demos';
$files = scandir($dir);
foreach ($files as $file){
    if ($file !== '.' and $file !== '..'){
        print_r("
            <h1><a href='{$dir}/{$file}'>{$file}</a><h1>
        ");
    }
}