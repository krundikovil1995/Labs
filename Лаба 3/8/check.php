<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$filename = $_POST['search'];


function readPath ($file){
    $result =[];
    $array = scandir($file);
    foreach ($array as $value){
        if ($value != '.' && $value != "..") {
            if (is_dir($file . DIRECTORY_SEPARATOR . $value)) {
                $result[$value . 'Size: ' . filesize($file . DIRECTORY_SEPARATOR . $value) . ' Time: ' . date('Y-m-d', filectime($file . DIRECTORY_SEPARATOR . $value))] = readPath($file . DIRECTORY_SEPARATOR . $value);
            } else if (preg_match('/.+(.txt)/', $value)) {
                $result[] = $value . ' Context: ' . file_get_contents($file . DIRECTORY_SEPARATOR . $value, false, NULL, 0, 20);
            } else {
                $result[] = $value . ' Size: ' . filesize($file . DIRECTORY_SEPARATOR . $value) . ' Time: ' . date('Y-m-d', filectime($file . DIRECTORY_SEPARATOR . $value));
            }
        }
    }
    return $result;
}

$res = readPath($filename);
dm($res);


?>