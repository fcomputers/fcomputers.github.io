<?php
session_start();
if ($_SESSION['login'] != "1")
    {
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="nl" xml:lang="nl">
    <head>
        <title>Loginsysteem</title>
    </head>
    <body bgcolor="#000000" text="#FFFFFF" link="#FF0000" alink="#FF0000" vlink="#FF0000"><br />

        Dit is de beveiligde pagina. <?php echo "Je bent ingelogd als " . $_SESSION['login-naam'] . "."; ?><br /><br />
        <a href="uitloggen.php">Uitloggen</a>

    </body>
</html>
