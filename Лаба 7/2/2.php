<?php


setcookie($_POST['name'], $_POST['value'], time() + $_POST['time']);

echo @$_COOKIE[$_POST['name']];

print_r($_COOKIE);


?>


