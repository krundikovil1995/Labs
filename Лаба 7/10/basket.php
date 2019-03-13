<?php

if (isset($_POST['order'])){
    if (!empty($_POST['cole'])){
        $cole = $_POST['cole'];
        $prod = $_POST['prod'];

        if (isset($_COOKIE['product'][$prod])){
          $cole= $_COOKIE['product'][$prod] + $cole;
        }

        setcookie("product[$prod]", $cole);
        header("location: index.php");
    }
}

?>