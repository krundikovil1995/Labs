<?php

if (isset($_POST['order'])){
    foreach ($_COOKIE['product'] as $key => $value){
        echo "Продукт: ".$key." Количество: ".$value."<br>";
    }
}

if (isset($_POST['confirm'])){

    $keys = array();

    foreach ($_COOKIE['product'] as $key=>$value){
        $keys[] = $key;
    }

    foreach ($keys as $value){
        setcookie("product[$value]", "");
    }

    header("location: index.php");

}

?>


<form action="order.php" method="post">
    <input type="submit" value="Подтвердить заказ" name="confirm">
</form>
