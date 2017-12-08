<?php

$rezult = mail("Shevstrukk@mail.ru","Анкета с сайта","С сайта была получена анкета сданными:\n Имя $_POST[name] \nпароль $_POST[password]");

if ($rezult) {
	echo "<p>Сообщение отправлено успешно</p>";
}

else {
	echo "<p>Сообщение не отправлено</p>";
}

?>