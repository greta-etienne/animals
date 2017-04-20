<?php 
	$auth = true;
	include('../libs/includes.php'); 
?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Page privé</title>
</head>
<body>
	<h1>Page privé</h1>
	<a href="<?= WEBROOT ?>logout.php" title="Se déconnecter">Se déconnecter</a>
	<?= flash(); ?>
</body>
</html>