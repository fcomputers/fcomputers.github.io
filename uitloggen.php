<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="nl" xml:lang="nl">
    <head>
        <title>Loginsysteem</title>
    </head>
    <body bgcolor="#000000" text="#FFFFFF" link="#FF0000" alink="#FF0000" vlink="#FF0000"><br />

<?php
//zet de variabele zo dat het script het herkent als niet-ingelogd
$_SESSION['login'] = "0";

echo "Je bent nu uitgelogd<br /><br />";

?>

    </body>
</html>
