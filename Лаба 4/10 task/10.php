<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$textarea = file_get_contents('10.html');
$array = explode(' ', $textarea);

foreach ($array as $key=>$value){
    if (preg_match('/^[\d]+$/', $value)){
        $array[$key] = '<b style="background-color: greenyellow">'.$value.'</b>';
    }
}

$str = implode($array, ' ');


function convertText($x){
    if (preg_match('/\<i\>[А-Яа-пр-яЁё" "]+\<\/i\>/', $x[0])) {
        return '<b style="background-color: #00ffdb">' . $x[0] . '</b>';
    } else if (preg_match('/\<strong\>[А-Яа-пр-яЁё" "]+\<\/strong\>/', $x[0])){
        return '<b style="background-color: #9e2a7d">'.$x[0].'</b>';
    }
}

echo preg_replace_callback('/((\<i\>)|(\<strong\>))[А-Яа-пр-яЁё" "]+((\<\/i\>)|(\<\/strong\>))/', 'convertText', $str);

?>