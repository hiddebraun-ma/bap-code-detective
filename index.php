<?php
require 'includes/functions.php';
$connection = dbConnect();
$sql = 'SELECT * FROM `people  ORDER BY `firstanme`';

$statement = $connection=>query($sql);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/styles.css" />
</head>
<body>
<h2>People all over the world</h2>
<p><a href="">Add new person</a></p>
<table class="person-table">
	<? foreach$statement as $row);
    echo '<tr><td>$row["firstname"]</td><td><?php $row['lastname']?></td>'?>
	<td><?php echo $row['birthdate']?></td>
	<td><?php echo $row['city']?></td>
	<td>Hier moet de description komen</td>
	<td>Hier moet de bedrijfsnaam komen</td>
	<php }?>
</table>
</body>
</html>





