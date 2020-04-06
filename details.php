<?php
require 'includes/functions.php';
$connection = dbConnect();

$sql = 'SELECT * FROM `people WHERE id = ' . $_GET['id'];

$statement = $connection->query( $sql );

$connection = false;

// Hier het aantal gevonden rijen opslaan in de variabele $num_rows

if ( $num_rows === 1 ):
$person = $connection->fetch( $statement );

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1><?php echo getFullName() ?></h1>
<hr>
Geboren op <?php // TODO hier moet geboortedatum komen
?>
<?php echo $row['city'] ?><br/>
<?php echo $person['description'] ?>
<p>
    <a href="">Terug naar het overzicht</a>
</p>
</body>
</html>





