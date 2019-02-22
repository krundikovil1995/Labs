<?php
include_once('shablon.php');
$content->set('{page_title}', 'О цветах');
$content->set('{button_1}', 'Главная');
$content->set('{button_2}', 'О странице');
$content->set('{button_3}', 'Контакты');
$content->set('{page_text}', '<div> Наша компания является крупным поставщиком цветов и подарков из Европы в Беларусь. Наша сеть розничных магазинов представлена брендами Белиана и ПроЦветы. Сети магазинов есть в Гродно и Минске.</div>');

$content->out_content('index.tpl');


?>