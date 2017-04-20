<?php
// Display message flash
function flash() {
	if (isset($_SESSION['Flash'])) :
		$message = $_SESSION['Flash']['message'];
		$type    = $_SESSION['Flash']['type'];

		$flash = '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">' . $message . '</div>';

		// Remove session flash
		unset($_SESSION['Flash']);

		return $flash;
	endif;

}

function setFlash($message, $type = 'success') {
	$_SESSION['Flash']['message'] = $message;
	$_SESSION['Flash']['type']    = $type;
}