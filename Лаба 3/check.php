<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

function ConvertDate ($date1)
{
    $date1 = strtotime($date1);
    $datetime2 = (date('Y-m-d'));
    $date2 = strtotime($datetime2);
    $month1 = date('n', $date1);
    $month2 = date('n', $date2);

    $day1 = date('j', $date1);
    $day2 = date('j', $date2);

    if ($month1 > $month2) {
        $res = (idate('Y', $date2) - idate('Y', $date1) - 1);
    } else if ($month1 = $month2 and $day1 > $day2) {
        $res = (idate('Y', $date2) - idate('Y', $date1) - 1);
    } else { $res = (idate('Y', $date2) - idate('Y', $date1)); }

    return $res;

}

function ConvertTime2 ($date1){
    $datetime2 = (date('Y-m-d'));
    $now = new DateTime($datetime2);
    $date = new DateTime($date1);
    $duration = $now -> diff($date);
    echo $duration->format('%y %m %d');
}
$datetime1 = ($_POST['date']);
$datetime2 = (date('Y-m-d'));

ConvertDate($datetime1, $datetime2);




$dir = $_POST['search'];
$result = array();

function WriteFile ($str)
{
    global $result;
    $array = scandir($str);
    foreach ($array as $key => $value) {
        if ($value != "." && $value != "..") {
            if (is_dir($str . "\\" . $value) == 1) {
                $array[$key] = scandir($str . "\\" . $value);
                $result[$value] = WriteFile($str."\\".$value);
            }
            else { $result[]=$value; }
        }
        /*if ($value != "." && $value != "..") {
            if (is_dir($str . "\\" . $value) == 1) {
                    $array[$key] = scandir($str . "\\" . $value);
                    WriteFile($array[$key]);
            }
        } */
    }
    return ($result);
}


dm(WriteFile($dir));

?>

