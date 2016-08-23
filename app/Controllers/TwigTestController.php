<?php
require_once("../../vendor/Twig/Autoloader.php" );

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('../Views/');
$twig = new Twig_Environment($loader);
echo $twig->render('header.html.twig', array('name' => 'World'));