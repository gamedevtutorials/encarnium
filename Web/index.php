<?php
session_start();

// Errors immer anzeigen (jedenfalls solange in der Entwicklungsphase):
//error_reporting(E_ALL | E_STRICT);

// Core laden
require_once realpath(dirname(__FILE__).'/../Framework/EF/Core.php');

// Konstanten definieren
\Framework\EF\Core::setConstants();

//@todo wird noch nicht eigenständig geladen
//include_once SMARTY_PLUGINS."block.translate.php";

// Core laden starten
$application = new \Framework\EF\Core();
$application->run();


?>
