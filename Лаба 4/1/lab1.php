<?php

$str = 'Hi, i am want to define 234.234 numbers in a text 789 and 123 round 34.12543 fractional  numbers 23 554.342 23.23.234';

function numbers($x)
{
    $test = trim($x[0], '.');
    echo $test . "\n";
    if (preg_match("/^\d+$/", $test)) {
        return '<b style="background-color:green">' . $test . '</b>';
    } else if (substr_count($test, '.') == 1) {
        return '<b style="background-color: red">' . round($test, 1) . '</b>';
    } else {
        return $x[0];
    }
}

echo preg_replace_callback('/[\d.-]+/', 'numbers', $str);

?>