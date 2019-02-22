<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$t = 'Это текст, в котором есть плейсхолдеры: {FILE="file1.ext"} {FILE="file2.ext"}';
$filename=$t[6];
echo ($filename);

?>