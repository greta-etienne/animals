<?php
// Connect user
function login() {
	if (!empty($_POST)) :
		$requireFields = [
			'email'    => 'Merci de renseigner une adresse email.', 
			'password' => 'Merci de renseigner un mot de passe.'
		];

		// Check if require fields !empty
		$fields = requireFields($requireFields);

		if (empty($fields)) :
			global $db;

			// Prepare data
			$email    = $db->quote($_POST['email']);
			$password = $db->quote(sha1($_POST['password']));

			// Request
			$sql     = "SELECT * FROM users WHERE email = $email AND password = $password";
			$request = $db->query($sql);

			if ($request->rowCount() > 0) :
				$_SESSION['Auth'] = $request->fetch();
				setFlash('Vous êtes bien connecté.');
				header('Location:' . WEBROOT . 'admin/index.php');
				die();
			else :
				setFlash('Merci de vérifier vos informations de connexion.');
			endif;
		else :
			setFlash('Merci de renseigner les champs obligatoires.');
			return $results['fields'] = $fields;
		endif;
	endif;
}

// Logout user
function logout () {
	if (!empty($_SESSION['Auth'])) :
		unset($_SESSION['Auth']);
		setFlash('Vous êtes bien déconnecté.');
		header('Location:' . WEBROOT . 'index.php');
		die();
	endif;
}


// Check require fields
function requireFields($requireFields) {
	$results = [];
	foreach ($requireFields as $key => $value) :
		if (empty($_POST[$key])) :
			$results[$key] = $value;
		endif;
	endforeach;

	return $results;
}


// Value form
function valueForm($field) {
	if (!empty($_POST[$field])) :
		return $_POST[$field];
	endif;
}
