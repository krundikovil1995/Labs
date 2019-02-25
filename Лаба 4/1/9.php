<?php

$str = "All Words Begin with a Capital Letter. And every New Sentence begin with a capital Letter.";

$array = explode(' ', $str);
$begin = '<b style="text-decoration: underline">'.$array[0].'</b>';

function convertText($x)
{
    return '<b style="background-color: red">'.$x[0].'</b>';
}


$str = preg_replace_callback('/[A-Z][a-z]+/', 'convertText', $str);

$str = substr_replace($str, $begin." ", 28, strlen($begin));
echo $str;

?>