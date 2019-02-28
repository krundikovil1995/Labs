<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

function my_replace(&$text)
{
    global $my_array;
    $reg_poisk = '/{(.+)="(.+)"}/';
    if(preg_match_all($reg_poisk, $text, $matches))
    {
        dm($matches);
        foreach($matches[1] as $key=>$m)
        {
            if ($m == 'FILE')
            {
                $text = str_replace($matches[0][$key], file_get_contents($matches[2][$key]), $text);
            }
            else if ($m == 'CONFIG')
            {
                $ini_array = parse_ini_file($matches[2][$key]);
                echo '<pre>';
                print_r($ini_array);
                echo '</pre>';
                $text = str_replace($matches[0][$key], "", $text);
            }
            else if ($m == 'VAR')
            {
                //echo 'Value: '.$my_array[$matches[2][$key]].'<br />';
                $text = str_replace($matches[0][$key], $my_array[$matches[2][$key]].'<br />', $text);
            }
            else if ($m == 'DB')
            {
                $row = 1;
                $handle = fopen("c:\Apache24\htdocs\Sergey\\russian_names.csv", "r");
                while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    $num = count($data);
                    $row++;
                    if ($matches[2][$key] == $data[0]){
                        for ($c=0; $c < $num; $c++) {
                            echo $data[$c] . "<br />\n";
                        }
                        break;
                    }
                }
                fclose($handle);
                $text = str_replace($matches[0][$key], "", $text);
            }
        }
    }
}


$str = 'This text {CONFIG="configuration"}';
my_replace($str);
echo $str;

?>