<?php

session_start();
ob_start();

//var_dump($_GET['link'],$_GET['a']);

require('./Controllers/ViewController.php');

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
			$link = new ();
			break;
		case 'home' :
			require('./Controllers/Acceuilcontroller.php');
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


include('./view/HeaderView.html');
include('./view/MenuView.html');
//echo $contentPage;
echo '<div id="content">'.$contentPage.'</div>';
include('./view/FooterView.html');
?>
