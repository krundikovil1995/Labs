<?php

$str = 'this is the URL of the site: https://vk.com/feed';

function changeStyleURL ($t){
    $url = trim($t[0], '.');

    return '<b style="background-color: red"><a href="'.$url.'">'.$url.'</a></b>';
}

echo preg_replace_callback('/(http|https|ftp)(:\/\/)(?:([\w!-$^]+)[.][\w]+)([\w\/?=+-_а-яА-ЯёЁ&%]*[\w\/+=?-а-яА-ЯёЁ:&%])?/', 'changeStyleURL', $str);

?>