<?php

$date = "In this task we are reform date to a new view! 29/11/2018, 29.11.2016, 1.2.16, 2/11/95, 2/12/2015 ";


function convertDate ($x){
    $date = trim($x[0], '.');
    $date = preg_replace('![^0-9]+!', '-', $date);
    if (preg_match('/[\d]{1,2}[-][\d]{1,2}[-][\d]{2}$/', $date)){
        $length = strlen($date);
        $numb = substr($date, -2);
        if ($numb<20) {
            $date = substr_replace($date, "20$numb", -2);
        } else {
            $date = substr_replace($date, "19$numb", -2);
        }
    }
    return '<b style="background-color: red">'. (date('d-m-Y', (strtotime("+1 years", strtotime($date))))).'</b>';
}


echo preg_replace_callback('/[\d]{1,2}[\/\.][\d]{1,2}[\/\.][\d]{2,4}/', 'convertDate', $date);

?>