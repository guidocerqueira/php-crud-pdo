<?php

function MyAutoLoad($Class)
{
    $cDir = ['Crud'];
    $iDir = null;

    foreach ($cDir as $dirName):
        if (!$iDir && file_exists(__DIR__ . '/' . $dirName . '/' . $Class . '.php') && !is_dir(__DIR__ . '/' . $dirName . '/' . $Class . '.php')):
            include_once(__DIR__ . '/' . $dirName . '/' . $Class . '.class.php');
            $iDir = true;
        endif;
    endforeach;
}

spl_autoload_register("MyAutoLoad");
