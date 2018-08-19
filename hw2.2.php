<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homework4</title>
	<style>
       h1 {padding-top: 25px; color: red; text-align: left; font-size: 24px; font-family: Arial, Tahoma, sans-serif;}
       div {height: 30px; font-family: Arial, Tahoma, sans-serif; color: darkblue; font-size: 16px;}
       .result {position: relative; height: 300px; width: 500px; border: solid, 1px, black; background: lightblue;}
       img {position: absolute; top: 35px; right: 30px; height: 150px; width: 150px;}
	</style>
</head>
<body>
<div class="result">
	<h1>Текущие погодные условия</h1>
<?php
$f_json="http://api.openweathermap.org/data/2.5/weather?id=1486209&appid=2d00ede167fe01a22c03782a7e6ba628";
$json = file_get_contents("$f_json");
$obj = json_decode($json, true);
$opisanie = $obj['weather'][0]['main'];
$icon= $obj['weather'][0][icon];
$gorod = $obj['name'];
$temp = $obj['main']['temp'];
$speed = $obj['wind']['speed'];
$napr = $obj['wind']['deg'];
$davlen = $obj['main']['pressure'];
$vlaga = $obj['main']['humidity'];
?>
    <div>Город: <?php echo $gorod;?></div>
    <div>Температура воздуха: <?php echo $temp;?> К</div>
    <div class="icon">Погодные условия: <?php echo $opisanie; ?></div>
    <div>Скорость ветра: <?php echo $speed;?> м/с</div>
    <div>Направление ветра: <?php echo $napr;?>°</div>
    <div>Атмосферное давление: <?php echo $davlen;?> гПа</div>
    <div>Влажность: <?php echo $vlaga;?> %</div>
    <img src="http://openweathermap.org/img/w/<?php echo $icon ?>.png">
</div>
</body>
</html>
