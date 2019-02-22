<?php

$file = ($_POST['search']);

function fileConvert ($file)
{
    if (file_exists($file)) {
        $forfilename = pathinfo($file);
        $tofilename = $forfilename['filename'];
        $arrForchange = array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я','а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',' ');
        $arrTochange = array('a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya','a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya',' ');
        $filename = str_replace($arrForchange, $arrTochange, $tofilename);
        $filename = mb_strtolower($filename);
        $filename = preg_replace("/[\W_]/", "_", $filename);
        $forfilename['filename'] = $filename;
        print_r($forfilename);
        $tofilename = $forfilename["dirname"]."\\".$filename.".".$forfilename["extension"];
         for($i=0; (file_exists($tofilename) == 1); $i++){
             $path = pathinfo($tofilename);
             $path['filename'] = $path['filename']."_".$i;
             $tofilename = $path['dirname']."\\".$path['filename'].".".$path["extension"];
        }
         rename($file, $tofilename);
            } else echo "Файла не существует";
}

fileConvert($file);
?>