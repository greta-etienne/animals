<?php
// Session
session_start();

// Check connect users
if (!isset($auth) || $auth) :
	if (!isset($_SESSION['Auth']['id']) && FILENAME != 'login') :
		header('Location:' . WEBROOT . 'login.php');
		die();
	endif;
endif;
