<?php

function clean ($value = "") {
	  $value = trim($value);
	  $value = stripslashes($value);
	  $value = strip_tags($value);
	  $value = htmlspecialchars($value);
	  
	  return $value;
}

function check_length ($value = "", $min, $max) {
	  $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
	  return !$result;
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {
$login = $_POST['login'];
$pass = $_POST['pass'];

$login = clean($login);
$pass = clean($pass);

if (!empty($login) && !empty($pass)) {
	   if(check_length($login, 4, 8) && check_length($pass, 4, 8)) {
		     echo "Спасибо за сообщение";
	   }
	   else {echo "Некорректный ввод";
	   }
}
	 else { echo "Некорректный ввод";
	 }
}
	else { header("index.php");
	}
?>