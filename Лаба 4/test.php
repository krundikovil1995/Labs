<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$input = [
    [
        1,
        2,
        3,
    ],
    [
        6,
        7,
        8,
    ]
];
dm($input);
$result = call_user_func_array("array_merge", $input);
dm($result);

?>