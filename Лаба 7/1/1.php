<?php

function datarecord ($data){
    $arr = $data;
    $data = serialize($arr);
    return $data;
}

function unserializedata ($data){
    $arr = $data;
    $data = unserialize($arr);
    return $data;
}

$data = ['A', 'B'];

var_dump(datarecord($data));


?>