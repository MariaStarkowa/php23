<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homework3</title>
</head>
<body>
<?php
$continents = array(
    "Africa"=> array("Vulpes pallida", "Acinonyx jubatus", "Gazella", "Cervus elaphus"), 
    "Australia"=> array("Ornithorhynchus", "Thylacinus cynocephalus", "Macropus giganteus"), 
    "Eurasia"=> array("Gulo gulo gulo", "Ursus arctos", "Erinaceus auritus")
);
echo "<pre>";
print_r($continents);

$array_animals = [];
$first = [];
$second = [];

foreach ($continents as $animals) {
    foreach ($animals as $new) {
    	if (count(explode(' ', $new)) === 2) {
            $array_animals[]=$new;
            $arr=explode(' ', $new);
            $first[] = $arr[0];
            $second[] = $arr[1];
    	}
    }
}

echo '<pre>';
print_r($array_animals);

shuffle($first);
shuffle($second);

$final = [];
for($i=0; $i<count($first); $i++) {
    $final[] = $first[$i]. " " .$second[$i];
}
echo "<pre>";
print_r($final);
?>
</body>
</html>
