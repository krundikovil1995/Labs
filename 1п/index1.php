<?php
include_once('shablon.php');
$content->set('{page_title}', 'О цветах');
$content->set('{button_1}', 'Главная');
$content->set('{button_2}', 'О странице');
$content->set('{button_3}', 'Контакты');
$content->set('{page_text}',  '<h3 style="padding: 10px;"> Описание цветов: </h3>
			  <table class="atable">
			     <tr><td style="width: 50%; padding: 10px;"><img src="agapantus.jpg" alt="Агапантус"/>
				    <h4 id="agapantus"><a href="detail.html">Агапантус</a></h4>
					<p>Агапантус (лат. Agapánthus). Растение относится к семейству лилейных, родиной же его считается Южная Африка.</p>
					</td>
					<td><img src="astra.jpg" alt="Астра" />
					<h4 id="astra">Астра</h4>
					<p>Астра (лат. Aster). Относится к семейству астровых, которое объединяет более двухсот видов популярных декоративных растений, очень красивых в период цветения.</p>
					</td>
				 <tr><td style="width: 50%; padding: 10px;"><img src="верба.jpg" alt="Верба"/>
				     <h4 id="verba">Верба </h4>
					 <p>Верба (лат. Salix). Относится к семейству ивовых, известна как ракита, ива, ветла, лоза, тальник и лозина.</p>
					 </td>
					 <td><img src="гвоздика.jpg" alt="гвоздика"/>
					 <h4 id="gvozdika">Гвоздика</h4>
					 <p>Antigua – новый взгляд на гвоздики. Оказывается, эти цветы вполне способны составить конкуренцию самым роскошным и крупным розам или пионам!</p>
					 </td>
				</tr>
				<tr><td style="width: 50%; padding: 10px;"><img src="георгин.jpg" alt="Георгин"/>
				     <h4 id="georgin">Георгин</h4>
					 <p>В мире насчитывается около 10 000 сортов георгинов 15 основных цветов и оттенков. Плотные, яркие цветы шарообразной формы – настоящие любимцы флористов!</p>
					 </td>
					 <td><img src="ирис.jpg" alt="Ирис"/>
					    <h4 id="iris">Ирис</h4>
						<p>Ирис (лат. Iris). Еще одно название ириса – «касатик». Относится к семейству ирисовых.</p>
						</td>
				 </tr>
				</table>');
$content->out_content('index.tpl');

?>
