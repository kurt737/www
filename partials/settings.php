<?php

$logo = '<img src="assets/img/logo.png" alt="RANDOM">';

$navigation = [

    [ 'index.php', 'Domov', ],

    [ 'gallery.php', 'Galéria', ],

    [ 'contact.php', 'Kontakt', ],

];

$phone_contact = '+421 944 517 756';
$email_contact = 'kurta.tomas@gmail.com';
$meno = 'Tomáš Kurta';
$adresa = 'Chrobákova 6';
$psc = '841 02 Bratislava';
$krajina = 'Slovensko';

$webPage = $_SERVER['SCRIPT_FILENAME'];
$webPage_name = basename( $webPage, '.php' );

switch ( $webPage_name ) {
    case 'index':
        $webPage_name = 'domov';
        break;
    case 'gallery':
        $webPage_name = 'galéria';
        break;
    case 'contact':
        $webPage_name = 'kontakt';
        break;
}