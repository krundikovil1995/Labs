<?php

$yearGet = $_POST['date'];
echo '<h3>', $yearGet,'</h3>';
$from = strtotime("$yearGet-1-1");
$from = date('Y-m-d', $from);
$from= strtotime($from);

$to = strtotime("$yearGet-12-31");
$to = date('Y-m-d', $to);
$to = strtotime($to);

function days_in_month($month, $year) {
    return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);
}

$daysOfMonth = [1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];

$daysOfWeek = [1 => 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
$firstDay=date('N', $from);
printf('<table>');
printf('<tr>');

$n =1;
foreach ($daysOfMonth as $week) {
    printf('<tr><th>%s</th></tr>', $week);
    printf('</tr>');
    $SecInDay = 24 * 60 * 60;
    $numOfDay = 1;
    $year = ($from / (24 * 60 * 60));
    $dayOfM = strtotime("$yearGet-$n-1");
    $dayOfM = date('N', $dayOfM);

    foreach($daysOfWeek as $day){
        printf('<th>%s</th>', $day);
    }
    printf('<tr>');
    for ($i=1; $i < $dayOfM; $i++){
        printf('<td></td>');
    }
        for ($s=$i; $s <= 7; $s++){
            printf('<td>%s</td>', $s-$i+1);
        }
        printf("<tr>");
        $l=0;
        for ($k = ($s-$i+1); $k <= days_in_month($n, $year); $k++) {
            $l=$l+1;
            printf('<td>%s</td>', $k);
            if (($l % 7) == 0)  {
                printf('<tr>');
            }
    }
       $n=$n+1;
}
printf('</table>');
?>