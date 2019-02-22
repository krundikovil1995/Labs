<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$filename = $_POST['search'];


function displayFile ($filename){
    $result = [];
    $array = scandir($filename);
    foreach($array as $key => $value){
            if ($value != "." && $value != ".."){
                if (is_dir($filename . DIRECTORY_SEPARATOR . $value) == true){
                       $result[$value."/".date("Y-m-d", filectime($filename.$value))]=displayFile($filename. DIRECTORY_SEPARATOR.$value);
                } else $result[]=$value;
            }
          }
    return $result;
}
$file = displayFile ($filename);
dm($file);

?>