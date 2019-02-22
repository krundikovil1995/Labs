<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$array = array(1,
    2,
    "Третий" => array(
        18,
        23,
        25,
        27,
        28,
        "Четвертый" => array(
            36,
            38,
            68,
            123,
            145
        )
    ),
    34,
    "Второй" => array(54,
        43,
        14,
        16,
        17
    )
);
dm($array);


function search($array, $value)
{
    foreach ($array as $key => $item) {
        if (gettype($item) == 'array') {
            $arKeys = search($item, $value);

            if ($arKeys) {
                return array_merge([$key], $arKeys);
            }
        } else {
            if ($item == $value) {

                return (array)$key;
            }
        }
    }

    return false;
}

$result = search($array, 18);
dm ($result);

?>