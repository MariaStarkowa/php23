<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Домашка</title>
</head>
<body>
<form name="x" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
Введите число: <br>
<input type="text" name="x">
<input type="submit">
</form>
<?php 
$x = $_GET['x'];
$y = 1;
$z = 1;
while ($x >= $y) {
    if ($x == $y) {
    	echo "Задуманное число входит в числовой ряд";
    break;
    }
    if ($x > $y) {
 	    $b = $y;
	    $y=$y+$z;
	    $z = $b;
    }    
}
if ($x < $y) {
    echo "Задуманное число НЕ входит в числовой ряд";
}
?>
</body>
</html>