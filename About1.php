<?php
$username="Мария";
$age=35;
$email="starkowa.maria@mail.ru";
$city="Краснотурьинск";
$about="Специалист по анализу и учету";
?>
<html lang="ru">
<head>
<title>Обо мне</title>
<meta charset="UTF-8">
</head>
<body>
<h1>Страница пользователя <?=$username?></h1>
<table>
	<tr>
<td><strong>Имя:</strong></td><td><?=$username?></td>
    </tr>
    <tr>
<td><strong>Возраст:</strong></td><td><?=$age?></td>
    </tr>
    <tr>
<td><strong>Адрес электронной почты:</strong></td><td><a href="mailto:<?=$email?>"><?=$email?></a></td>
    </tr>
    <tr>
<td><strong>Город:</strong></td><td><?=$city?></td>
    </tr>
    <tr>
<td><strong>О себе:</strong></td><td><?=$about?></td>
    </tr>
</table>
</body>
</html>