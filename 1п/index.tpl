<!Doctype html>
<html> 
  <head>
    <meta charset="utf-8">
	<title> {page_title} </title>
	[styles.css]
	<link rel="shortcut icon" href="sprout.ico" type="image/x-icon">
   </head>
   <body id="middle">
      <table border="0" id="header">
	  <tr><td><h1>Сайт про цветы</h1>
	          <br/>
			  <form method="get">
			  <input type="text" placeholder="Поиск по сайту:" name="search"/>
			  </form>
		   </td>
	   </tr>
	   </table>
	   <ul class="menu">
	    <li><a href="index1.php">{button_1}</a></li>
		<li><a href="about.php">{button_2}</a></li>
		<li><a href="contacts.php">{button_3}</a></li>
		</ul>
		<table id="table">
		<td class="aleft">
		  <h3>Разновидности цветов: </h3>
		  <ul>
		    <li><a href="#agapantus">Агапантус</a>
			</li>
			<li><a href="#astra">Астра</a></li>
			<li><a href="#verba">Верба</a></li>
			<li><a href="#gvozdika">Гвоздика</a></li>
			<li><a href="#georgin">Георгин</a></li>
			<li><a href="#iris">Ирис</a></li>
		  </ul>
		  </td>
		  <td class="aMain"> {page_text} </td>
		  <td class="aRight">
		       <h3>Вход на сайт</h3>
		       <form action="check.php" method="post">
			   <fieldset>
			   <legend>Введите данные</legend>
			   <label for="login">Логин<span style="color:#ff0000;">*</span>:</label>
			   <input type="text" required name="login" id="login" placeholder="Ввведите имя"/></br>
			   <label for="pass">Пароль<span style="color:#ff0000;">*</span>:</label>
			   <input type="password" required id="pass" name="pass" placeholder="Введите пароль"/></br>
			   <p>
			    <button type="submit">Отправить</button>
				<button type="reset">Отмена</button>
				</p>
				</fieldset>
				</form>
			</td>
			</tr>
		 </table>
		 <div id="footer">Copyright © metanit.com, 2012-2019. Все права защищены</div>
	 </body>
</html>
