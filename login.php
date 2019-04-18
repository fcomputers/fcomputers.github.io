<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
	<meta charset="utf-8">
	<title><?php echo $results['title']; ?></title>
</head>
<body>

<form action="index.php?action=login" method="post">
	<input type="hidden" name="login" value="true">
	<h2><?php echo $results['title']; ?></h2>
	<p>Gebruikersnaam = webprofis<br/>Wachtwoord = webprofis</p>
	<?php if ( isset( $results['error'] ) ) { echo '<p>' . $results['error'] . '</p>'; } ?>
	<input type="text" name="username" placeholder="Gebruikersnaam" required>
	<input type="password" name="password" placeholder="Wachtwoord" required>
	<button type="submit">Inloggen</button>
</form>

</body>
</html>