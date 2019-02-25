<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$date = "In this task we are reform date to a new view! 11/29/2018, 11.29.2016, 1.2.16, 2/11/95, 2/12/2015 ";


function convertDate ($x){
    $date = trim($x[0], '.');
    if (preg_match('/[\d]{1,2}[\/\.][\d]{1,2}[\/\.][\d]{2}$/', $date)){
    $numb = substr($date, -2);
    if ($numb<20) {
        $date = substr_replace($date, "20$numb", -2);
    } else {
        $date = substr_replace($date, "19$numb", -2);
    }
    }
    if (preg_match('/[\d]{1,2}[\/][\d]{1,2}[\/][\d]{2,4}$/', $date)) {
        $date = DateTime::createFromFormat('m/d/Y', $date);
    } else
    {
        $date = DateTime::createFromFormat('m.d.Y', $date);
    }
    $date = date_format($date, 'Y-m-d');
    return '<b style="background-color: red">'. (date('d-m-Y', (strtotime("+1 years", strtotime($date))))).'</b>';
}


echo preg_replace_callback('/[\d]{1,2}[\/\.][\d]{1,2}[\/\.][\d]{2,4}/', 'convertDate', $date);

?>