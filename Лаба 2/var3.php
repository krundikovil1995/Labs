<?php
function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$str = "Hello world! How are you? Are you good?";

interface ModyInterface
{
    public function Modifier(array $array, $numberWord):array;
}


class ArrayWalkModifier implements ModyInterface
{
    function Modifier(array $array, $numberWord): array
    {
        array_walk($array, function (&$value, $key) use ($numberWord) {
            if (($key + 1) % $numberWord == 0) {
                $value = strtoupper($value);
            }
        });

        return $array;
    }
}

class ForModifier implements ModyInterface
{
    function Modifier(array $array, $numberWord): array
    {
        for ($i = 0; $i < count($array); $i++) {
            if (($i + 1) % $numberWord == 0) {
                $array[$i] = strtoupper($array[$i]);
            }
        }
        return $array;
    }
}

class ForeachModifier implements ModyInterface
{
    function Modifier(array $array, $numberWord): array
    {
        foreach ($array as $key => &$value) {
            if (($key + 1) % $numberWord == 0) {
                $value = strtoupper($value);
            }
        }
        return $array;
    }
}

class ForeachModifier2 implements ModyInterface
{
    function Modifier(array $array, $numberWord): array
    {
        foreach ($array as $key => $value) {
            if (($key + 1) % $numberWord == 0) {
                $array[$key] = strtoupper($array[$key]);
            }
        }
        return $array;
    }
}

class ArrayMapModifier implements ModyInterface
{
    function Modifier(array $array, $numberWord): array
    {
        $array = array_map(function ($key, $value) use ($numberWord) {
            if (($key + 1) % $numberWord == 0) {
                $value = strtoupper($value);
            }
            return ($value);
        }, array_keys($array), $array);
        return $array;
    }
}

class ArrayMapModifier2 implements ModyInterface
{
    function Modifier(array $array, $numberWord): array
    {
        $key = 0;
        $array = array_map(function ($value) use ($numberWord, $key) {
            $key += 1;
            if (($key + 1) % $numberWord == 0) {
                $value = strtoupper($value);
            }
            return $value;
        }, $array);
        return $array;
    }
}

class ModifyString
{
    protected $modifier;
    public $numberWord = 2;

    function setModify ($modifier)
    {
     $this -> modifier = $modifier;

    }
    function modify($string)
    {
        $array = explode(' ', $string);
        $modifier = $this-> modifier;
        $numberWord = $this -> numberWord;
        $array = $modifier->Modifier($array, $numberWord);
        return implode(' ', $array);
    }
}

$modifiers = [
    new ArrayWalkModifier(),
	new ForModifier(),
	new ForeachModifier(),
	new ForeachModifier2(),
	new ArrayMapModifier(),
    new ArrayMapModifier2()
];


$modify = new ModifyString;
array_map(function ($modifier) use ($modify, $str) {
    $modifi = $modify -> setModify($modifier);
    $NewString = $modify ->modify($str);
    dm($NewString);
    dm($modify);
}, $modifiers);


?>