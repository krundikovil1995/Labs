<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$date = "In this task we are reform date to a new view! 11/29/2018, 11.29.2016, 1.2.16, 2/11/95, 2/12/2015 ";

function convertNumbers ($x){
    $date = trim($x[0], '.');
    $number = substr($date,-1);
    $number = $number + 1;
    $date = substr_replace($date, "$number", -1);
    return '<b style="background-color: red">'.$date.'</b>';
}




echo preg_replace_callback('/[\d]{1,2}[\/\.][\d]{1,2}[\/\.][\d]{2,4}/', 'convertNumbers', $date);

?>