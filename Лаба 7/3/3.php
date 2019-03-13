<?php

setcookie($_POST['name'], $_POST['value'], time() + $_POST['time']);

header("refresh:0.01; url=index.php");

?>