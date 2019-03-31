<?php

$str = 'Hi, i AM want TO define 234.234 numbers IN a text 789 and 123 round 34.12543 fractional  numbers 23 554.342 23.23.234';

function numbers($x)
{
    $test = trim($x[0], '.');
    if (preg_match("/^\d+$/", $test)) {
        return '<b style="background-color:green; text-decoration: underline">' . $test . '</b>';
    } else if (substr_count($test, '.') == 1) {
        return '<b style="background-color:#00ffdb">' . round($test, 1) . '</b>';
    }else if (preg_match('/[A-Z]{2,}/', $test)){
        return '<b style="background-color: red">'.$test.'</b>';
    } else if (preg_match('/[A-Z][a-z]+/', $test)) {
        return '<b style="background-color:#8000ff">' . $test . '</b>';
    }
    else {
        return $x[0];
    }
}

echo preg_replace_callback('/[A-Z]{2,}|[A-Z][a-z]+|[\d.-]+/', 'numbers', $str);

?>