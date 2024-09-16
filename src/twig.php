<?php

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

require_once('../vendor/autoload.php');

// Fonction qui permet d'initialiser Twig en fixant le dossier des modèles
function init_twig()
{
	// Indique le répertoire ou sont placés les modèles (templates)
	$loader = new FilesystemLoader('../templates');

	// Crée un nouveau moteur Twig
	$twig = new Environment($loader, ['debug' => true]);
	$twig->addExtension(new DebugExtension());

	// Renvoie le moteur
	return $twig;
}