<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Exercice 12 PHP</title>
	</head>
	<body>
	<h1>Afficher tous les nombres impairs entre 0 et 300, par ordre croissant.</h1>
	<?php
	for($i = 1; $i <= 300; $i+=2){
		echo $i. '  ';
	}
	?>
	</body>
</html>
