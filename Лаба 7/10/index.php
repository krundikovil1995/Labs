<?php

$products = ['Кофе', 'Молоко', 'Чай', 'Конфеты', 'Торт', 'Курица', 'Мороженое'];

if (isset($_COOKIE['product'])){
    foreach ($_COOKIE['product'] as $key => $value){
        echo $key. " = ". $value."<br>";
    }
}


?>


<h3>Выберите товар</h3>
<?php foreach ($products as $value): ?>
<form action="basket.php" method="post">
    <input type="number" min="0" name="cole">
    <input type="text" name="prod" readonly value="<?php echo $value; ?>">
    <input type="submit" name="order" value="Добавить в корзину"><br>
</form>
<?php endforeach; ?>
<form action="order.php" method="post">
    <input type="submit" name="order" value="Сделать заказ">
</form>
