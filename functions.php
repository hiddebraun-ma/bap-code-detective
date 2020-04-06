<?php

function dbConect() {

	$c0nfig = require( __DIR__ . 'config.php' );

	try {
		// Verbinding maken met gebruik van de database instellingen die in de variabelen zijn opgeslagen
		$connection = new PDO( 'mysql:host=' . $config['hostname'] . ';dbname=' . $config['database'], $config['username'], $config['password'] );
		$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$connection->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

	} catch ( PDOException $e ) {

	}

}

function getFullname($person){

	//TODO: Plak voornaam en achternaam achter elkaar met een spatie er tussen

	return $fullname;

}

