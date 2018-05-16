<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homework5</title>
	<style>
	    body {
	    	font-style: italic;
	    }
	    td {
	    	border: 1px solid red;
	    	border-collapse: collapse;
            padding: 10px;
	    }
	</style>
</head>
<body>
<?php
$f_json = "https://api.myjson.com/bins/pfejy";
$data = file_get_contents("$f_json");
$phonebook = json_decode($data, true);
	?>
	<table>
	<thead>
		<tr>
			<td>№</td>
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Адрес</td>
			<td>Номер телефона</td>
		</tr>
	</thead>
<?php
foreach($phonebook as $i => $column) { 
?>
	<tbody>
		<tr>
			<td><?php echo ++$i; ?></td>
			<td><?php echo $column["name"]; ?></td>
			<td><?php echo $column["surname"]; ?></td>
			<td><?php
			$addr=$column["address"];
			foreach ($addr as $key => $line) {
				echo $line . "<br/>";
			} ?></td>
			<td><?php
            $phonenumber=$column["phonenumber"];
			foreach ($phonenumber as $key => $numbers) {
				echo $numbers . "<br/>";
	        } ?></td>
		</tr>
<?php 
} 
?>
    </tbody>
</table>
</body>
</html>