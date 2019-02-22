<?php

include_once ('shablon.php');
$content->set('{page_title}', 'О цветах');
$content->set('{button_1}', 'Главная');
$content->set('{button_2}', 'О странице');
$content->set('{button_3}', 'Контакты');
$content->set('{page_text}', '<div>Свяжитесь с нами по любым вопросам!</br>
Магазины цветов «PROцветы cash&carry» и «Белиана»</br></br>

ВРЕМЯ РАБОТЫ</br>
Ежедневно:</br>
8:00 — 20:00</br>
</br>
ПОЧТА</br>
accents@list.ru inflowers.by@yandex.by</br>
ТЕЛЕФОНЫ</br>
+375 44 522-22-21</br>
НАХОДИМСЯ</br>
Долгиновский тракт, 188, Минск
  </div>');
$content->out_content('index.tpl');



?>