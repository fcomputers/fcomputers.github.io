<?php
define( 'SAVE', true );
define( 'USERNAME', 'webprofis' );		// Gebruikersnaam
define( 'PASSWORD', 'webprofis' ); // Wachtwoord

session_start();
$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

if ( $action != "login" && $action != "logout" && !$username ) {
	login();
	exit;
}

switch ( $action ) {
	case 'login':
		login();
		break;
	case 'logout':
		logout();
		break;
	default:
		home();
}

function login() {
	$results = array();
	$results['title'] = "Login";
	if ( isset( $_POST['login'] ) ) {
		if ( $_POST['username'] == USERNAME && $_POST['password'] == PASSWORD ) {
			$_SESSION['username'] = USERNAME;
			header( "Location: index.php" );
		} else {
			$results['error'] = "Gebruikersnaam en Wachtwoord komen niet overeen of zijn onbekend!";
			require( "login.php" );
		}
	} else {
		require( "login.php" );
	}
}

function logout() {
	unset( $_SESSION['username'] );
	header( "Location: index.php" );
}

function home() {
	$results = array();
	$results['title'] = "Home";
	require( "home.php" );
}
?>