<?php

session_start();
ob_start();

const EN_PROD = false;


//Twig init
require_once ('./lib/Twig/Autoloader.php') ;
Twig_Autoloader::register();
$twigConf = array();
if(EN_PROD) {
  $twigConf['cache'] = '/cache';
}
$loader = new Twig_Loader_Filesystem('./Views');
$twig = new Twig_Environment($loader, $twigConf);

//Default Url Index & Action
$link  = '';
$action = 1;

if(isset($_GET['link']))
{
    switch($_GET['link'])
    {
        case '':
            require('./Controllers/HomeController.php');
            $link = new Home();
            break;
        case 'home' :
            require('./Controllers/HomeController.php');
            $link = new Home();
            break;
        case 'news-admin' :
            require('./Controllers/NewsAdminController.php');
            $link = new NewsAdmin();
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
            require('./Controllers/HomeController.php');
            $link = new Home();
            break;
    }
    //@TODO : default "/" redirection must be review 
} else {
    require('./Controllers/HomeController.php');
    $link = new Home();
}

if(isset($_GET['a'])) $action = (int)$_GET['a'];
$link->doAction($action);
$contentPage = ob_get_contents();
ob_end_clean();


//$contentPage display page
include('./Views/ViewContent.php');


