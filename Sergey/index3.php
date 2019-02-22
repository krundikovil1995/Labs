<?php
include_once ('shablon.php');

$content->set('{page_title}', 'Skateboarding');
$content->set('{page_title}', 'Skateboarding');
$content->set('{page_text}', '<p>Многие скейтеры внесли свою лепту в становление и развитие нынешнего скейтбординга. Но вклад некоторых райдеров сложно переоценить. Предлагаем TOP10 лучших скейтеров в мире, без которых сложно представить современный скейтбординг.</p>
                    <div class="skate"><img src = "imagine/sk1.jpg"></div>
                    <p class = "zagolovok1">Тони Хоук (Tony Hawk).</p> <p>Профессиональный скейтер, впервые выполнивший сложнейший трюк Indy 900. Уже в 14 лет он получил статус про-скейтера и катался от имени спонсора. Привлеченная культовым статусом Тони, компания Activision в 1999 году выпустила видеоигру Tony Hawk’s Pro Skater, ставшую впоследствии бестселлером.</p>
                    <div class="skate"><img src = "imagine/sk2.jpg"></div>
                    <p class = "zagolovok1">Родни Маллен (Rodney Mullen).</p> <p>В 80-х годах прошлого столетия он стал одним из первых пропагандистов уличного катания. Именно Родни придумал многие известные уличные трюки (ollie, pop-shove, kickflip, impossible и др.)</p>
                    <div class="skate"><img src = "imagine/sk3.jpg"></div>
                    <p class = "zagolovok1">Эрик Костон (Eric Koston).</p> <p>Профессиональный скейтер тайского происхождения, который первым стал исполнять трюки с перилами. Другая ”фишка” Эрика – потрясающие амплитудные прыжки через лестницы.</p>
                    <div class="skate"><img src = "imagine/sk5.jpg"></div>
                    <p class = "zagolovok1">Дэнни Вэй (Danny Way).</p> <p>Исполнитель совершенно немыслимых трюков: трансфера через Великую Китайскую Стену, прыжка из вертолёта на гигантскую рампу, прыжка с высотки в огромный радиус и многих других. Именно Дэнни считается создателем катания в мегарампе. Он перенес множество тяжелых травм, но все равно остался в скейтбординге.</p>
                    <div class="skate"><img src = "imagine/sk6.jpg"></div>
                    <p class = "zagolovok1">Райан Шеклер (Ryan Sheckler).</p> <p>Эта самая противоречивая личность современного скейтбординга. Одни зрители его боготворят, другие ненавидят. Не любят Райана за самолюбование, сравнивая его с голливудскими кинозвездами. В ответ на критику Шеклер каждый раз демонстрирует все более умопомрачительные трюки.</p>
                    <div class="skate"><img src = "imagine/sk7.jpg"></div>
                    <p class = "zagolovok1">Элисса Стимер (Elissa Steamer).</p> <p>Сегодня она самый известный райдер в юбке. Элисса никогда не пасовала перед трудностями и предпочитает самые тяжелые препятствия, наклонные грани и рэйлы. Возможно, этому способствовала дружба с одиозной тусовкой Piss Drunx Crew.</p>');
$content->set('{button_1}', 'Главная');
$content->set('{button_2}', 'Скейт-трюки');
$content->set('{button_3}', 'Скетбордисты');
$content->set('{button_4}', 'О Сайте');
$content->set('{bottom_text}', 'Сайт разработал и создал студент группы 551003: Кудрявцев Сергей Александрович.');

$content->out_content('shablon.tpl');

?>