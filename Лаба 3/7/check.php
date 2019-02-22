<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}


$filename = $_POST['search'];
$count =0;
$sum =0;



function counting ($array){
    global $count;
    global $sum;
    $path = scandir($array);
    foreach ($path as $key => $value) {
        if ($value != "." && $value != ".."){
            if (is_dir($array.DIRECTORY_SEPARATOR.$value)){
                counting($array.DIRECTORY_SEPARATOR.$value);
            } else if (preg_match('/[A-Za-z0-9]+(.php)/', $value)){
                $count = $count + 1;
                $sum = $sum +1;
            } else {
                $sum = $sum + 1;
            }
        }
    }
}

function readPath ($filename){
    $result = [];
    $array = scandir($filename);
    foreach ($array as $value){
        if ($value != '.' && $value != '..'){
            if (is_dir($filename.DIRECTORY_SEPARATOR.$value)){
                $result[$value]=readPath($filename.DIRECTORY_SEPARATOR.$value);
            } else $result[] = $value;
        }

    }
    return $result;
}



counting($filename);
$array = readPath($filename);
dm ($array);

$ratio = ($count/$sum)*100;
echo round($ratio, 2)."% файлов с расширением .php";


/*echo $count;
$res = ratioFile($array, $count);*/



?>