<?php

$str = "This line contains telephone numbers: 8(017)3270671, 327-06-71, 80173270671, +375(29)7899574, +375-29-789-95-74";

function telNumbers ($x){
       $numb = trim($x[0], '.');
       echo $numb."\n";
       if (preg_match('/[+][\d]{3}[(+--]((29)|(44)|(25)|(33))/', $numb)){
           return '<b style="background-color: #00ffdb; text-decoration: underline">'.$numb.'</b>';
       } else {
           return '<b style="background-color: #00ffdb">'.$numb.'</b>';
       }
}

echo preg_replace_callback('/[\d()--+]+/', 'telNumbers', $str);

?>