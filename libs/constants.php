<?php
// Define WEBROOT
//define('WEBROOT', dirname($_SERVER['SCRIPT_NAME']) . '/');
define('WEBROOT', 'http://127.0.0.1/greta/animals/master/');

// Define FILENAME
$filename = basename($_SERVER['SCRIPT_NAME']);
$filename = explode('.', $filename);
define('FILENAME', $filename[0]);
