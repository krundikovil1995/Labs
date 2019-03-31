<?php

$str = 'My email is Krundikov@mail.ru and i want to create email in a MAIL kind';

function email ($t){
    $text = trim($t[0], '.');
    return '<b style="background-color: red">'.'<a href="mailto:EMAIL">'.$text.'</a>'.'</b>';
}

echo preg_replace_callback('/[\w.-^]+[@][\w]+[.][\w]+/', 'email', $str);

?>