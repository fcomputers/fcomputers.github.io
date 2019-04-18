<?php if(!defined('SAVE')) die('Je kunt deze pagina niet direct laden.'); ?>
<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
	<meta charset="utf-8">
	<title><?php echo $results['title']; ?></title>
</head>
<body>

<h2><?php echo $results['title']; ?></h2>
<p>Je bent bij deze ingelogd, klik <a href="index.php?action=logout">hier</a> om uit te loggen.</p>

</body>
</html>