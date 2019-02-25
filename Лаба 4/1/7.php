<?php

$str = "In this task мы преобразуем строку 12 13 14 15 16";

function convertText($x){
    $text = $x[0];

    if (preg_match('/[\d]+/', $text)){
        return '<b. style="background-color: #00840f">'.$text.'</b.>';
    } else if (preg_match('/[A-Z-a-z]+/', $text)){
        return '<b style="background-color: #00a5ff">'.$text.'</b>';
    } else if (preg_match('/[А-Яа-я]+/u', $text)){
        return '<b style="background-color: red">'.$text.'</b>';
    }
}

echo preg_replace_callback('/[\wА-Яа-яЁё]+/u', 'convertText', $str);

?>