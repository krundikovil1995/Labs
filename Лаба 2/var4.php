<?php


$array = array(
    "Robby",
    23,
    65.3,
    23.54,
    65.23,
    'Первый' => array (
     "Habbit",
        123,
        23.543,
        54.232,
        45,
        23,
        'Второй' => array (
            'Третий' => array (
                'Четвертый' => array (
                    'Пятый' => array (
                        1,
                        2,
                        3,
                        4,
                        5,
                        6.034,
                        7,
                        8.654,
                        9.34,
                        0,
                        11,
                        12.34,
                        13,
                        14.234,
                        15,
                        16.234,
                        17.65,
                        18.86,
                        "what",
                        20.34,
                        "Okey",
                        22.765,
                        "apple",
                        24.76,
                        25.567,
                        26.567,
                        27,
                        28,
                        29,
                        30

                    )
                )
            )
        )
    ));

global $cole;

function array_walker(&$array){
    global $cole;
    foreach($array as $key => $item){
        asort($array);
        if (gettype($item) == 'array'){
            array_walker($array[$key]);
        } else if (gettype($item) == 'integer'){
            $cole++;
            unset($array[$key]);
        } else if (gettype($item) == 'double'){
            $array[$key] = round($array[$key], 2);
        } else if (gettype($item) == 'string'){
            $array[$key] = strtoupper($array[$key]);
        }
    }
}

array_walker($array);
print_r ($array);
echo $cole;


?>