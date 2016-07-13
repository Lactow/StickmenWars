<?php

session_start();
ob_start();

const EN_PROD = false;

//Require files
require('./Controllers/ViewController.php');


//Twig init
require_once ('./lib/Twig/Autoloader.php') ;
Twig_Autoloader::register();
$twigConf = array();
if(EN_PROD) {
  $twigConf['cache'] = '/cache';
}
$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, $twigConf);

//Default Url Index & Action
$link  = new Index();
$action = 1;

if(isset($_GET['link']))
{
	switch($_GET['link'])
	{
		case 1 :
		break;
		case 'news-admin' :
			require('./Controllers/NewsAdminController.php');
			$link = new NewsAdmin();
			break;
		case 'home' :
			require('./Controllers/Homecontroller.php');
			$link = new Home();
			break;
		case 'signup' :
			require('./Controllers/SignUpController.php');
			$link = new Signup();
			break;
		case 'connection' :
			require('./Controllers/ConnectionController.php');
			$link = new Connection();
			break;
		case 'script' :
			require('./Controllers/ScriptController.php');
			$link = new Script();
			break;
		case 'shop' :
			require('./Controllers/ShopController.php');
			$link = new Shop();
			break;
		case 'fight' :
			require('./Controllers/FightController.php');
			$link = new Fight();
			break;
		default :
			break;
	}
}

if(isset($_GET['a'])) $action = (int)$_GET['a'];
$link->doAction($action);
$contentPage = ob_get_contents();
ob_end_clean();

include('./views/HeaderView.html');

if(isset($_SESSION['login'])){
	include('./views/MenuUserView.html');
} else {
	include('./views/MenuHomeView.html');
}
include('./views/BodyView.php');
include('./views/FooterView.html');