<?php
	if (!isset($_SESSION)){
		session_start();
	}
	$user = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="style.css" rel="stylesheet" type="text/css">
		<title>
			Espace perso
		</title>
	</head>

	<body class="num2">
		<h1 class="hache1"> Votre compte en banque </h1>

		<p class="bjr">Bienvenue <?php echo $user; ?></p>

		<table>
			<tr>
				<th>2012</th>
				<td>Paypal, don de charité</td>
				<td>- 20 000,00 €</td>
			</tr>
			<tr>
				<th>2011</th>
				<td>Taxe d'habitation - Niort</td>
				<td>- 4 000 000,00 €</td>
			</tr>
			<tr>
				<th>2011</th>
				<td>Acte de divorce</td>
				<td>- 200 000,00 €</td>
			</tr>
			<tr>
				<th>2004</th>
				<td>APL - Poitou-Charentes</td>
				<td>+ 0,34 €</td>
			</tr>
		</table>
				<a class="boutonalacon" href="index.php">Se déconnecter</a>
	

	</body>

</html>
<!--
	<?php
			$_SESSION = array();
			session_destroy();
		?>
		-->
