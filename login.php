<?php include('libs/includes.php'); ?>

<?php $result = login(); ?>

<html>
<head>
	<meta charset="UTF-8" />
	<title>Liste des animaux - L'encyclopédie des espèces marines</title>
</head>
<body>
	<?= flash(); ?>
	<form action="login.php" method="post">
		<div>
			<label for="email">Adresse email</label>
			<input type="text" id="email" name="email" value="<?= valueForm('email'); ?>" />
			<?= (!empty($result['fields']['email'])) ? $result['fields']['email'] : '' ; ?>
		</div>
		<div>
			<label for="password">Mot de passe</label>
			<input type="password" id="password" name="password" />
			<?= (!empty($result['fields']['password'])) ? $result['fields']['password'] : '' ; ?>
		</div>
		<input type="submit" value="Se connecter" />
	</form>
</body>