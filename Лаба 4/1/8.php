<?php

function dm($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$str = "This text THOO   contains    some   1233 information.  1234 Every sentence SOO 7654   must be formatted  234 OAO   to the   new paragraph.  ";
$str = preg_replace('/[ ]{2,}/', ' ', $str);

function convertText ($x){
   $text = $x[0];
   if (preg_match('/[A-Z]{2,}/', $text)){
      return '<b style="text-decoration: underline">'.$text.'</b>';
   } else if (preg_match('/[\d]+/', $text)){
       return '<b style="background-color: #00a5ff">'.$text.'</b>';
   } else if (preg_match('/[\w_-]+[\.]/', $text)){
       return $text.'<p>'.'</p>';
   } else return $text;
}

echo preg_replace_callback('/[\w_\-\.]+/', 'convertText', $str);


?>