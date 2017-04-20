<?php 
// Debug mode
$debug = true;


// Database connect informations
$host     = 'localhost';
$name     = 'animals-marine';
$user     = 'root';
$password = '';


// Try connect to database
try {
	// Connect database
	$db = new PDO('mysql:host=' . $host . ';dbname=' . $name, $user, $password);

	// Config PDO
	$db->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	
	// Encodage
	$db->exec("SET CHARACTER SET utf8");
}
catch (Exception $e) {
	if ($debug) :
		// Return message of exception
		$message = $e->getMessage();
		$message = utf8_encode($message);

		// Display message
		$closeButton = '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>';
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Erreur :</strong> ' . $closeButton . $message . '</div>';
	else :
		echo '<h1>Erreur de connexion à la base de données</h1>';
		die();
	endif;
}